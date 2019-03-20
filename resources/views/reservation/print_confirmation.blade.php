@extends('template')

{!! Html::style('css/itinerary.css') !!}
{!! Html::style('css/print.css',array('media' => 'print')) !!}

@section('main')
    <main id="site-content" role="main">
      
<div class="page-container page-container-responsive">
  <div class="col-center col-9 panel row-space-top-2 row-space-4">
    <div class="panel-body clearfix">
      <div class="row row-table">
        <div class="col-6 col-top">
          <h1 class="h2">
            {{ trans('messages.your_reservations.itinerary') }}
          </h1>
          {{ trans('messages.your_reservations.confirmation_code') }}: {{ $reservation_details->code }}
        </div>

        <div class="col-6 col-bottom">
          <div class="row row-table">
            <div class="banner-button-list-item hide-print col-4 col-bottom print_itinerary hide-sm">
              <a class="icon-banner-button" onclick="print_itinerary()" href="#">
                {{ trans('messages.your_reservations.print_itinerary') }}
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="panel-body">
  <div class="row row-table row-space-2">
    <div class="col-4 col-top">
      <strong>{{ trans('messages.home.checkin') }}</strong>
      <div class="h4 row-space-top-1">{{ $reservation_details->checkin_dmy }}</div>
      <div class="text-muted">
        @if($reservation_details->list_type == 'Rooms')
        {{ trans('messages.your_reservations.flexible_checkin_time') }}
        @endif
      </div>
    </div>

    <div class="col-4 col-top">
      <strong>{{ trans('messages.home.checkout') }}</strong>
      <div class="h4 row-space-top-1">{{ $reservation_details->checkout_dmy }}</div>
      <div class="text-muted">
        @if($reservation_details->list_type == 'Rooms')
        {{ trans('messages.your_reservations.flexible_checkout_time') }}
        @endif
      </div>
    </div>
    <div class="col-2 col-bottom">
      <div class="h4">{{ $reservation_details->duration }}</div>
      <div class="text-muted">{{ ucfirst($reservation_details->duration_type_text) }}</div>
    </div>
    <div class="col-2 col-bottom">
      <div class="h4">{{ $reservation_details->number_of_guests }}</div>
      <div class="text-muted">{{ trans_choice('messages.home.guest',1) }}</div>
    </div>
    <div class="col-3 spacer"></div>
  </div>


  <!-- <div class="row row-space-4 row-space-top-4">
    <div class="col-12">
        <a href="{{ url('/') }}/reservation/change?code={{ $reservation_details->code }}" class="btn btn-block">Change or Cancel</a>
    </div>
  </div> -->
</div>

<div class="panel-body">
  <div class="row">
    <div class="col-6">
      <strong><a href="{{ url('/') }}/rooms/{{ $reservation_details->room_id }}" class="{{$reservation_details->title_class}}">{{ $reservation_details->rooms->name }}</a></strong><br>

     @if($reservation_details->rooms->rooms_address->address_line_1  != '')
      {{ $reservation_details->rooms->rooms_address->address_line_1 }}<br>
     @endif
     @if($reservation_details->rooms->rooms_address->city  != '')
       {{ $reservation_details->rooms->rooms_address->city }} , @endif
     @if($reservation_details->rooms->rooms_address->state  != '')
       {{ $reservation_details->rooms->rooms_address->state }} <br> @endif
       @if($reservation_details->rooms->rooms_address->country_name  != '')
       {{ $reservation_details->rooms->rooms_address->country_name }} <br> @endif 
    </div>

    <div class="col-6">
      <div class="media">
        <a href="{{ url('/') }}/users/show/{{ $reservation_details->user_id }}" class="pull-left media-photo img-round"><img alt="{{ $reservation_details->users->first_name }}" height="50" src="{{ $reservation_details->users->profile_picture->src }}" title="{{ $reservation_details->users->first_name }}" width="50"></a>
        <div class="media-body">
          <strong><a href="{{ url('/') }}/users/show/{{ $reservation_details->user_id }}">{{ $reservation_details->users->full_name }}</a></strong><br>
          @if($reservation_details->status == 'Accepted')
          <strong><a href="mailto:{{$reservation_details->users->email}}">{{ trans('messages.your_reservations.contact_by_email') }}</a></strong><br>
          <strong>{{$reservation_details->users->primary_phone_number}}</strong><br>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="clearfix padd2">
    <div class="col-sm-6">
      <div class="column-item text-wrap row-space-3">
        <h4>{{ trans('messages.payments.payment') }}</h4>
        {{ trans('messages.your_reservations.see_transaction_history') }}
      </div>

      <div class="column-item text-wrap row-space-3">
        <h4>{{ trans('messages.payments.cancellation_policy') }}</h4>
        @if($reservation_details->cancellation == 'Flexible')
        {{ trans('messages.your_reservations.flexible_desc') }}
        @elseif($reservation_details->cancellation == 'Moderate')
        {{ trans('messages.your_reservations.moderate_desc') }}
        @elseif($reservation_details->cancellation == 'Strict')
        {{ trans('messages.your_reservations.Strict_desc') }}
        @endif
      </div>
    </div><!-- col-sm-6 end -->
    <div class="col-sm-6">
      <div class="row-space-3 column-item">
        <h4 class="pull-left">{{ trans('messages.account.payout') }}</h4>

        <table class="table payment-table">
  <tbody>
    <tr>
      <th class="receipt-label">{{ $reservation_details->currency->symbol.$reservation_details->base_per_night }} x 
        {{ $reservation_details->subtotal_multiply_text }}
      </th>
      <td class="receipt-amount">
        {{ $reservation_details->currency->symbol}}  {{ ($reservation_details->base_per_night*($reservation_details->list_type == 'Experiences' ? $reservation_details->number_of_guests : $reservation_details->nights)) }}
      </td>
    </tr>
    @if($reservation_details->special_offer_id == '' || @$reservation_details->special_offer_details->type == 'pre-approval')
    @foreach($reservation_details->discounts_list as $list)
    <tr class="text-beach">
      <th class="receipt-label">{{ @$list['text'] }}</th>
      <td class="receipt-amount">
        -{{ $reservation_details->currency->symbol.@$list['price'] }}
      </td>
    </tr>
    @endforeach
    @if($reservation_details->additional_guest != 0)
    <tr>
      <th class="receipt-label">{{ trans('messages.your_reservations.additional_guest') }}</th>
      <td class="receipt-amount">
        {{ $reservation_details->currency->symbol.$reservation_details->additional_guest }}
      </td>
    </tr>
    @endif
    @if($reservation_details->cleaning != 0)
    <tr>
      <th class="receipt-label">{{ trans('messages.your_reservations.cleaning_fee') }}</th>
      <td class="receipt-amount">
        {{ $reservation_details->currency->symbol.$reservation_details->cleaning }}
      </td>
    </tr>
    @endif
    @endif
    @if($reservation_details->host_fee != 0)
      <tr class="host_fee receipt-line-item-negative">
        <th class="receipt-label">
          {{ $site_name }} {{ trans('messages.your_reservations.host_fee') }}
        </th>
        <td class="receipt-amount">(-{{ $reservation_details->currency->symbol.$reservation_details->host_fee }})</td>
      </tr>
    @endif
    @if($penalty != '')
      <tr class="host_fee receipt-line-item-negative">
        <th class="receipt-label">
          {{ trans('messages.your_reservations.penalty_amount') }}
        </th>
        <td class="receipt-amount">({{$reservation_details->currency->symbol.$penalty}})</td>
      </tr>
    @endif
  </tbody>
  <tfoot>
    <tr>
      <th class="receipt-label">{{ trans('messages.your_reservations.total_payout') }}</th>
      <td class="receipt-amount">{{ $reservation_details->currency->symbol.$reservation_details->host_payout }}</td>
    </tr>
    @if($reservation_details->security != 0)
    <tr>
      <th class="receipt-label">{{ trans('messages.your_reservations.security_fee') }} <i id="service-fee-tooltip"  rel="tooltip" class="icon icon-question" title="{{ trans('messages.disputes.security_deposit_will_not_charge') }}"></i></th>
      <td class="receipt-amount">
        {{ $reservation_details->currency->symbol.$reservation_details->security }}
      </td>
    </tr>
    @endif
  </tfoot>
</table>

      </div>
    </div>
  </div><!-- col-sm-6 end -->
  </div>
</div>

    </main>

<script>
function print_itinerary()
{
  window.print();
}
</script>

@stop