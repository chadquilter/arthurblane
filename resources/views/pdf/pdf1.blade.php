<!-- pdf1.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $form->form_title }}</title>
    <link href="https://bamconstruction.net/css/app.css" rel="stylesheet">
    <link href="https://bamconstruction.net/css/footer.css" rel="stylesheet">
    <link href="https://bamconstruction.net/css/image_styles.css" rel="stylesheet">
  </head>
  <body>

    <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px;" rules="none">
      <tr>
        <th>
          <img alt="{{ config('app.name', 'MDG') }}" src="https://bamconstruction.net/images/logo-brand_wt.png">
        </th>
        <th style="text-align: right;">
          <h6>
            {!! config('app.name', 'MDG') !!}<br>
            {{ env('COMPANY_STREET') }}<br>
            {{ env('COMPANY_STATE') }}<br>
            {{ env('COMPANY_PHONE') }}<br>
          </h6>
        </th>
      </tr>
      <tr bgcolor="#808080">
        <td colspan=2 bgcolor="#808080"> &nbsp; </td>
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
        <td colspan=2>

          <table class="table" id="dynamic_field">
            <tbody>
              @if(count($form->items()) > 0)
                @foreach($form->items() as $formItem)
                  <tr id="row{{ $loop->iteration }}">
                    <td id="item_div_{{$loop->iteration}}">
                      <strong>Item:</strong>
                      {{ $formItem->item_name }}
                    </td>
                    <td>
                      <strong>Amount: </strong>
                      {{ $formItem->amount }}
                      <strong>QTY: </strong>
                      {{ $formItem->qty }}
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>

        </td>
      </tr>
      <tr>
        <td>
          {!! $form->form_closing !!}
        </td>
      </tr>

    </table>
  </body>
</html>
