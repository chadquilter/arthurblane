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

    <div>
          <img alt="{{ config('app.name', 'MDG') }}" src="https://bamconstruction.net/images/logo-brand_wt.png">
    </div>
    <table>
      <tr>
        <td colspan="2" style="text-align: left;">
          <h3>Date: {{ $form->form_date }}</h3>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: left;">
          <h3>Invoice Number: #123456</h3>
        </td>
      </tr>
      <tr>
        <td>
          <h5>From:</h5>
          <h5>
          {!! config('app.name', 'MDG') !!}<br>
          {{ env('COMPANY_STREET') }}<br>
          {{ env('COMPANY_STATE') }}<br>
          {{ env('COMPANY_PHONE') }}<br>
          </h5>
        </td>
      </tr>
      <tr>
        <td>
          <h3>To:</h3><hr>
          {!! $form->form_contact !!}
        </td>
        <td></td>
      </tr>
      <tr>
        <td>
          {!! $form->form_salutation !!}
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td>
          {!! $form->form_body !!}
        </td>
      </tr>
      <hr>
      <tr>
        <td>

          <table class="table" id="dynamic_field">
            <tbody>
              @if(count($form_items_records) > 0)
                @foreach($form_items_records as $formItem)
                  <tr id="row{{ $loop->iteration }}">
                    <td id="item_div_{{$loop->iteration}}">
                      <strong>Item:</strong>
                      {{ $formItem->items_id }}
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
