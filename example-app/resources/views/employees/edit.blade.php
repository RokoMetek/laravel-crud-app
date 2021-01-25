@extends('layouts.navigation')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="container col-md-8">
            <div class="container col-md-8">
              <form method="post">
                  @csrf
                    <div class="form-group">
                      <label>Ime</label>
                      <input type="text" class="form-control" name='ime' value="{{ $employee->ime }}" required>
                    </div>

                    <div class="form-group">
                      <label>Prezime</label>
                      <input type="text" class="form-control" name='prezime' value="{{ $employee->prezime }}" required>
                    </div>

                    <div class="form-group">
                      <label>Slika</label>
                      <input type="text" class="form-control" name='slika' value="{{ $employee->slika }}">
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
                      <input class="date-picker-years form-control" name='godina_rodjenja' type="text" value="{{ $employee->godina_rodjenja }}">
                    </div>
      
                    <div class="form-group">
                      <label>Pocetak rada</label>
                      <input class="date-picker-pocetak-rada form-control" name='pocetak_rada' type="text" value="{{ $employee->pocetak_rada }}">
                    </div>
      
                    <div class="form-group">
                      <label>Vrsta ugovora</label>
                      <select class="select2-vrsta_ugovora" name="vrsta_ugovora">
                        <option value="odredeno">Određeno</option>
                        <option value="neodredeno">Neodređeno</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Odijel</label>
                      <input type="text" class="form-control" name='odijel'>
                    </div>
      
                    <div class="form-group">
                      <label>Trajanje ugovora</label>
                      <input class="date-picker-pocetak-rada form-control" name='trajanje_ugovora' type="text" value="{{ $employee->trajanje_ugovora }}">
                    </div>

                    <div class="form-group">
                      <label>Godišnji Odmor</label>
                      <input class="form-control" name='dan_go' type="number" value="{{ $employee->dan_go }}">
                    </div>

                    <div class="form-group">
                      <label>Slobodnih Dana</label>
                      <input class="form-control" name='dan_sd' type="number" value="{{ $employee->dan_sd }}">
                    </div>

                    <div class="form-group">
                      <label>Plačeni dopust</label>
                      <input class="form-control" name='dan_pd' type="number" value="{{ $employee->dan_pd }}">
                    </div>
      
                    <button type="submit" class="btn btn-success" formaction="{{ route('update', $employee->id) }}">Spremi</button>
                    <button type="submit" class="btn btn-danger" formaction="{{ route('destroy', $employee->id) }}">Izbrisi</button>
              </form>
          </div>
    </div>
  @endsection

  @section('javascripts')
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>

    var data = {!! json_encode($employee->toArray()) !!};
    console.log(data.spol)
    //Datepickers
    $('.date-picker-years').datepicker({  
      format: 'yyyy-mm-dd',
    });

    $('.date-picker-pocetak-rada').datepicker({  
      format: 'yyyy-mm-dd',
    });


    //Select2
    $('.select2-vrsta_ugovora').select2({
      minimumResultsForSearch: -1
    });


    //RadioButtons
    var $radios = $('input:radio[name=spol]');
    if($radios.is(':checked') === false) {
        $radios.filter(`[value=${data.spol}]`).prop('checked', true);
    }
  </script>
  @endsection