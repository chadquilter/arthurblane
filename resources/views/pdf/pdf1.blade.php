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
        <th style="border-bottom: 6px solid black;">
          <img alt="{{ config('app.name', 'MDG') }}" src="https://bamconstruction.net/images/logo-brand_wt.png">
        </th>
        <th style="text-align: right; border-bottom: 6px solid black;">
          <h6>
            {!! config('app.name', 'MDG') !!}<br>
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
        <td>
          <h5>To:</h5><hr>
          <h6>
            {!! $form->form_contact !!}
          </h6>
        </td>
        <td style="text-align: right;">
          <h6><strong>Date:</strong>{{ $form->form_date->format('m/d/Y') }}</h6>
          <h6><strong>Invoice Number:</strong> #123456</h6>
        </td>
      </tr>

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
        <td>
          <table style="border: .2rem solid black;">
            <thead>
              <th bgcolor="#5BC0DE"><strong>Description: </strong></th>
              <th bgcolor="#5BC0DE"><strong>Quantity: </strong></th>
              <th bgcolor="#5BC0DE"><strong>Unit Cost: </strong></th>
              <th bgcolor="#5BC0DE"><strong>Cost: </strong></th>
            </thead>
            <tbody>
              @foreach($saved_items as $formItem)
                <tr>
                  <td>
                    {{ $formItem->item->item_name }}
                  </td>
                  <td>
                    {{ $formItem->amount }}
                  </td>
                  <td>
                    {{ $formItem->qty }}
                  </td>
                  <td>
                    {{ $formItem->qty * $formItem->amount }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </td>
      </tr>
      <tr>
        <td>
          {!! $form->form_closing !!}
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr bgcolor="#5BC0DE" border=1>
        <td colspan=2 bgcolor="#5BC0DE"> &nbsp; </td>
      </tr>
    </tfoot>
  </table>
</body>
</html>
