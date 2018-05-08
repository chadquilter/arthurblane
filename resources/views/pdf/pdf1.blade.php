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
    <br>
    <table>
      <tr>
        <td>
          <h5><strong>From:</strong></h5><hr>
          <h6>
          {!! config('app.name', 'MDG') !!}<br>
          {{ env('COMPANY_STREET') }}<br>
          {{ env('COMPANY_STATE') }}<br>
          {{ env('COMPANY_PHONE') }}<br>
          </h6>
        </td>
        <td rowspan="2" style="vertical-align: top; horizontal-align: right;" width:100%>
          <h5><strong>Date:</strong> {{ $form->form_date }}</h5>
          <h5><strong>Invoice Number:</strong> #123456</h5>
        </td>
      </tr>
      <tr>
        <td>
          <br>
          <h5>To:</h5><hr>
          <h6>
            {!! $form->form_contact !!}
          </h6>
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
