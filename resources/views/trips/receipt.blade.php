@extends('template')
@section('main')
<main role="main" id="site-content" class="recepit_print_page">
  <div class="page-container page-container-responsive row-space-top-8">
    <div class="row-space-top-4 row row-condensed row-table row-space-4" id="receipt-id">
      <div class="col-md-3 col-sm-6 col-bottom">
        {{ @$reservation_details->receipt_date }}<br>
        
      </div>
      <div class="col-md-3 col-sm-12 col-bottom">
      </div>
      <div class="col-md-6 col-sm-12 col-bottom text-right">
      </div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="customer_recepit_panel">
          <h2>{{ trans('messages.your_trips.customer_receipt') }}
          </h2>
          <div class="pull-right hide-print">
            <a id="print_receipt" onclick="print_receipt()" class="btn" href="#">{{ trans('messages.your_trips.print') }}
            </a>
          </div>
          <div class="h6 row-space-2">
            {{ trans('messages.your_reservations.confirmation_code') }}
          </div>
          <div class="h4">
            {{ $reservation_details->code }}
          </div>
        </div>
        <div class="panel-body print_detail_view">
          <div class="row row-space-condensed row-space-3">
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.payments.name') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->users->full_name }}
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.payments.payment') }} {{ trans('messages.account.type') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->formatted_paymode }}
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.your_trips.travel_destination') }}
              </h6>
              <p class="text-lead">
                @if($reservation_details->rooms->rooms_address->city != "")
                {{ $reservation_details->rooms->rooms_address->city }}
                @else
                {{ $reservation_details->rooms->rooms_address->state }}
                @endif
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.your_trips.duration') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->duration_text }}
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              @if($reservation_details->list_type == 'Experiences')
              <h6>
                {{ trans('experiences.manage.category') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->rooms->category_details->name }}
              </p>
              @else
              <h6>
                {{ trans('messages.your_trips.accommodation_type') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->rooms->room_type_name }}
              </p>
            </div>
              @endif
            </div>
          </div>
          <div class="row row-space-condensed">
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.your_trips.accommodation_address') }}
              </h6>
              <p class="text-lead">
                <strong>{{ $reservation_details->rooms->name }}
                </strong>
              </p>
              <p class="text-lead">
                @if($reservation_details->rooms->rooms_address->address_line_1 !='')
                {{ $reservation_details->rooms->rooms_address->address_line_1 }}<br>
                @endif
                @if($reservation_details->rooms->rooms_address->city !='')
                {{ $reservation_details->rooms->rooms_address->city }}, 
                @endif
                @if($reservation_details->rooms->rooms_address->state !='')
                {{ $reservation_details->rooms->rooms_address->state }}
                @endif
                @if($reservation_details->rooms->rooms_address->postal_code !='')
                {{ $reservation_details->rooms->rooms_address->postal_code }}<br>
                @endif
                @if($reservation_details->rooms->rooms_address->country_name !='')
                {{ $reservation_details->rooms->rooms_address->country_name }}<br>
                @endif
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.your_trips.accommodation_host') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->rooms->users->full_name }}
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.home.checkin') }}
              </h6>
              <p class="text-lead">             
                {{ $reservation_details->checkin_dmy }}<br>
                @if($reservation_details->list_type == 'Rooms')
                {{ trans('messages.your_reservations.flexible_checkin_time') }}
                @endif
              </p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 detail_name_head">
              <div class="print_view_detail">
              <h6>
                {{ trans('messages.home.checkout') }}
              </h6>
              <p class="text-lead">
                {{ $reservation_details->checkout_dmy }}<br>
                @if($reservation_details->list_type == 'Rooms')
                {{ trans('messages.your_reservations.flexible_checkout_time') }}
                @endif
              </p>
            </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row row-space-condensed row-space-top-4">
            <div class="col-12">
              <h2>
                {{ trans('messages.your_trips.reservation_charges') }}
              </h2>
              <table class="table table-bordered payment-table">
                <tbody>
                  <tr>
                    <th class="receipt-label">{{ $reservation_details->currency->symbol.$reservation_details->base_per_night }} x 
                      {{ $reservation_details->subtotal_multiply_text }}
                    </th>
                    <td class="receipt-amount">
                      {{ $reservation_details->currency->symbol }} {{ ($reservation_details->base_per_night*($reservation_details->list_type == 'Experiences' ? $reservation_details->number_of_guests : $reservation_details->nights)) }}
                    </td>
                  </tr>
                  @if(@$reservation_details->special_offer_id == '' || @$reservation_details->special_offer_details->type == 'pre-approval')
                  @foreach($reservation_details->discounts_list as $list)
                  @if($list['price'])
                    <tr class="text-beach">
                      <th class="receipt-label">{{ @$list['text'] }}</th>
                      <td class="receipt-amount">
                        -{{ $reservation_details->currency->symbol.@$list['price'] }}
                      </td>
                    </tr>
                  @endif
                  @endforeach
                  @if($reservation_details->additional_guest)
                  <tr>
                    <th class="receipt-label">
                      {{ trans('messages.rooms.addtional_guest_fee') }}
                    </th>
                    <td class="receipt-amount">{{ $reservation_details->currency->symbol.$reservation_details->additional_guest }}
                    </td>
                  </tr>
                  @endif
                  @if($reservation_details->cleaning)
                  <tr>
                    <th class="receipt-label">
                      {{ trans('messages.your_reservations.cleaning_fee') }}
                    </th>
                    <td class="receipt-amount">{{ $reservation_details->currency->symbol.$reservation_details->cleaning }}
                    </td>
                  </tr>
                  @endif
                  @endif
                  @if($reservation_details->service)
                  <tr>
                    <th class="receipt-label">
                      {{ $site_name }} {{ trans('messages.your_reservations.service_fee') }}
                    </th>
                    <td class="receipt-amount">{{ $reservation_details->currency->symbol.$reservation_details->service }}
                    </td>
                  </tr>
                  @endif
                  @if($reservation_details->coupon_amount)
                  <tr>
                    <th class="receipt-label">
                      @if($reservation_details->coupon_code == 'Travel_Credit')
                      {{ trans('messages.referrals.travel_credit') }}
                      @else
                      {{ trans('messages.payments.coupon_amount') }}
                      @endif          
                    </th>
                    <td class="receipt-amount">-{{ $reservation_details->currency->symbol.$reservation_details->coupon_amount }}
                    </td>
                  </tr>
                  @endif
                </tbody>
                <tfoot>
                  <tr>
                    <th class="receipt-label">{{ trans('messages.rooms.total') }}
                    </th>
                    <td class="receipt-amount">{{ $reservation_details->currency->symbol.$reservation_details->total }}
                    </td>
                  </tr>
                  @if($reservation_details->security)
                  <tr>
                    <th class="receipt-label">
                      {{ trans('messages.your_reservations.security_fee') }} <i id="service-fee-tooltip"  rel="tooltip" class="icon icon-question" title="{{ trans('messages.disputes.security_deposit_will_not_charge') }}"></i>
                    </th>
                    <td class="receipt-amount">{{ $reservation_details->currency->symbol.$reservation_details->security }}
                    <small>({{trans('messages.disputes.security_deposit_will_not_charge')}})</small>
                    </td>
                  </tr>
                  @endif
                </tfoot>
              </table>
              <table class="table table-bordered payment-table">
                <tbody>
                  <tr>
                    <th class="receipt-label">
                      {{ trans('messages.your_trips.payment_received') }}:
                      {{ $reservation_details->receipt_date }}
                    </th>
                    <td class="receipt-amount">
                      {{ $reservation_details->currency->symbol.($reservation_details->total) }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-space-top-4" id="legal-disclaimer">
      <p>
        {{ trans('messages.your_trips.authorized_to_accept',['site_name'=>$site_name]) }}
      </p>
    </div>
  </div>
</main>
<script>
  function print_receipt()
  {
    window.print();
  }
</script>
@stop