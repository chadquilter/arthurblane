<!-- pdf1.blade.php -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{ $form->form_title }}</title>
  <link href="https://bamconstruction.net/css/app.css" rel="stylesheet">
  <link href="https://bamconstruction.net/css/footer.css" rel="stylesheet">
</head>
<body>

  <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px;" rules="none">
    <tbody>
      <tr>
        <th style="border-bottom: 3rem solid black;">
          <img alt="{{ config('app.name', 'MDG') }}" src="https://bamconstruction.net/images/logo-brand_wt.png">
        </th>
        <th style="text-align: right; border-bottom: 3rem solid black;">
          <h6>
            {{ config('app.name', 'MDG') }}<br>
            {{ env('COMPANY_STREET') }}<br>
            {{ env('COMPANY_STATE') }}<br>
            {{ env('COMPANY_PHONE') }}<br>
          </h6>
        </th>
      </tr>
      <tr bgcolor="#5BC0DE" border=1>
        <td colspan=2 bgcolor="#5BC0DE"> &nbsp; </td>
      </tr>
      <tr>
        <td colspan=2>
          <h5>To:</h5><hr>

          @foreach($form->addresses as $formAddress)
                  {{ $formAddress->name }}
                  <br>
                  {{ $formAddress->address1 }}
                  @if( $formAddress->address2 ==! '')
                    <br>
                    {{ $formAddress->address2 }}
                  @endif
                  <br>
                  {{ $formAddress->city }},{{ $formAddress->state }} &nbsp; &nbsp; {{ $formAddress->zipcode }}
                  <br>
            @endforeach
        </td>
        <td style="text-align: right;">
          <h6><strong>Date:</strong>{{ $form->form_date->format('m/d/Y') }}</h6>
          <h6><strong>Invoice Number:</strong> #123456</h6>
        </td>
      </tr>
      <tr><td> &nbsp; </td></tr>
      <tr>
        <td colspan=2>
          {!! $form->form_salutation !!}
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td colspan=2>
          {!! $form->form_body !!}
        </td>
      </tr>
      <hr>
      <tr>
        <td width=100%>
          <table style="border: .05rem solid black; width=100">
            <thead>
            <tr>
              <th bgcolor="#5BC0DE" nowrap><strong>Description: </strong></th>
              <th bgcolor="#5BC0DE" nowrap><strong>Quantity: </strong></th>
              <th bgcolor="#5BC0DE" nowrap><strong>Unit Cost: </strong></th>
              <th bgcolor="#5BC0DE" nowrap><strong>Cost: </strong></th>
            </tr>
            </thead>
            <tbody>
              @foreach($saved_items as $formItem)
                <tr>
                  <td style="border: .05rem dotted black;" nowrap>
                    {{ $formItem->item->item_name }}
                  </td>
                  <td style="border: .05rem dotted black; text-align: right;" nowrap>
                    {{ $formItem->qty }}
                  </td>
                  <td style="border: .05rem dotted black; text-align: right;" nowrap>
                    ${{ $formItem->amount }}
                  </td>
                  <td style="border: .05rem dotted black; text-align: right;" nowrap>
                    ${{ number_format($formItem->qty * $formItem->amount, 2) }}
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <td>Subtotal:</td>
                <td></td>
                <td></td>
                <td style="text-align: right;" nowrap>${{ number_format($item_grand_total, 2) }}</td>
              </tr>
              <tr>
                <td>Profit and Overhead:</td>
                <td></td>
                <td></td>
                <td style="text-align: right;" nowrap>${{ $item_grand_total }}</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: right;" nowrap>${{ $item_grand_total }}</td>
              </tr>
            </tfoot>
          </table>

        </td>
      </tr>
      <tr>
        <td colspan=2>
          {!! $form->form_closing !!}
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr bgcolor="#5BC0DE" border=1>
        <td colspan=2 bgcolor="#5BC0DE" style="border-bottom: 3rem solid black;">
          &nbsp;
          <small> 2018 {{ config('app.name', 'MDG')}} </small>
        </td>
      </tr>
    </tfoot>
  </table>
</body>
</html>
