@extends('layouts.navigation')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="container col-md-8">
        <form action={{ route('store') }} method="post">
            @csrf
              <div class="form-group">
                <label>Ime</label>
                <input type="text" class="form-control" name='ime'>
              </div>
              <div class="form-group">
                <label>Prezime</label>
                <input type="text" class="form-control" name='prezime'>
              </div>
              <div class="form-group">
                <label>Slika</label>
                <input type="text" class="form-control" name='slika'>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="spol" id="inlineRadio1" value="M">
                <label class="form-check-label" for="inlineRadio1">Muski</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="spol" id="inlineRadio2" value="W">
                <label class="form-check-label" for="inlineRadio2">Zenski</label>
              </div>
              
              <div class="form-group">
                <label>Godina rodjenja</label>
                <input class="date-picker-years form-control" name='godina_rodjenja' type="text">
              </div>

              <div class="form-group">
                <label>Pocetak rada</label>
                <input class="date-picker-pocetak-rada form-control" name='pocetak_rada' type="text">
              </div>

              <div class="form-group">
                <label>Vrsta ugovora</label>
                <select class="select2-vrsta_ugovora" name="vrsta_ugovora">
                  <option value="odredeno">Određeno</option>
                  <option value="neodredeno">Neodređeno</option>
                </select>
              </div>

              <div class="form-group">
                <label>Trajanje ugovora</label>
                <input class="date-picker-pocetak-rada form-control" name='trajanje_ugovora' type="text">
              </div>

              <div class="form-group">
                <label>Odijel</label>
                <input type="text" class="form-control" name='odijel'>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection

  @section('javascripts')
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready( function () {

          //Datepickers
          $('.date-picker-years').datepicker({  
          });

          $('.date-picker-pocetak-rada').datepicker({  
          });

          //Select2
          $('.select2-vrsta_ugovora').select2({
            minimumResultsForSearch: -1
          });
        });
    </script>
@endsection