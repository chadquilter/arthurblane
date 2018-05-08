<!-- pdf1.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $form->form_title }}</title>
  </head>
  <body>
    <table>
      <tr>
        <td>
          <img alt="{{ config('app.name', 'MDG') }}" src="https://bamconstruction.net/images/logo-brand.png">
        </td>
      </tr>
    </table>
    <table>
      <tr>
        <td>
          {{ $form->form_from }}
        </td>
        <td>
          {{ $form->form_contact}}
        </td>
      </tr>
      <tr>
        <td>
          {{ $form->form_salutation }}
        </td>
        <td>
          {{ $form->form_date }}
        </td>
      </tr>
      <tr>
        <td>
          {{ $form->form_body }}
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
          {{ $form->form_salutation }}
        </td>
        <td>
          {{ $form->form_closing }}
        </td>
      </tr>
    </table>
  </body>
</html>
