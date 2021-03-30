@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Cadastro de Serviços!') }}</div>

        <div class="card-body">
          <div class="panel-body">
            <form id="form-register-vehicle">
              {!! csrf_field() !!}
              <input type="hidden" name="id" id="id" value="{{ $vehicle->id ?? '' }}" />

              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="" class="control-label">Placa</label>
                      <input type="text" name="plate" class="form-control plate" required maxlength="20" value="{{ $vehicle->plate ?? '' }}">
                      <small id="error_plate" class="text-danger error-text"></small>
                    </div>
                    <div class="col-6 col-md-4">
                      <label for="" class="control-label">Tipo de veículo</label>
                      <select class="form-control" name="vehicle_type">
                        <option value="Passeio">Passeio</option>
                        <option value="Caminhão">Caminhão</option>
                        <option value="Moto">Moto</option>
                        <option value="Máquina">Máquina</option>
                      </select>
                      <small id="error_vehicle_type" class="text-danger error-text"></small>
                    </div>
                    <div class="col-6 col-md-5">
                      <label for="" class="control-label">Montadora</label>
                      <select class="form-control" name="automakers" id="marca" required>
                        <option value=''></option>
                        <option value=' ACELLERA'>ACELLERA</option>
                        <option value='ACURA'>ACURA</option>
                        <option value='ADAMO'>ADAMO</option>
                        <option value='ADLY'>ADLY</option>
                        <option value='AGRALE'>AGRALE</option>
                        <option value='ALFA ROMEO'>ALFA ROMEO</option>
                        <option value='AM GEN'>AM GEN</option>
                        <option value='AMAZONAS'>AMAZONAS</option>
                        <option value='AMERICAR'>AMERICAR</option>
                        <option value='APRILIA'>APRILIA</option>
                        <option value='ARIEL'>ARIEL</option>
                        <option value='ASTON MARTIN'>ASTON MARTIN</option>
                        <option value='ATALA'>ATALA</option>
                        <option value='AUDI'>AUDI</option>
                        <option value='BAJAJ'>BAJAJ</option>
                        <option value='BEACH'>BEACH</option>
                        <option value='BENELLI'>BENELLI</option>
                        <option value='BENTLEY'>BENTLEY</option>
                        <option value='BETA'>BETA</option>
                        <option value='BIANCO'>BIANCO</option>
                        <option value='BIMOTA'>BIMOTA</option>
                        <option value='BIRELLI'>BIRELLI</option>
                        <option value='BMW'>BMW</option>
                        <option value='BORGWARD'>BORGWARD</option>
                        <option value='BRANDY'>BRANDY</option>
                        <option value='BRAVA'>BRAVA</option>
                        <option value='BRAVAX'>BRAVAX</option>
                        <option value='BRILLIANCE'>BRILLIANCE</option>
                        <option value='BRP'>BRP</option>
                        <option value='BUELL'>BUELL</option>
                        <option value='BUENO'>BUENO</option>
                        <option value='BUGATTI'>BUGATTI</option>
                        <option value='BUGGY'>BUGGY</option>
                        <option value='BUICK'>BUICK</option>
                        <option value='BULL'>BULL</option>
                        <option value='CADILLAC'>CADILLAC</option>
                        <option value='CAGIVA'>CAGIVA</option>
                        <option value='CAN-AM'>CAN-AM</option>
                        <option value='CBT'>CBT</option>
                        <option value='CHAMONIX'>CHAMONIX</option>
                        <option value='CHANA'>CHANA</option>
                        <option value='CHEDA'>CHEDA</option>
                        <option value='CHERY'>CHERY</option>
                        <option value='CHEVROLET'>CHEVROLET</option>
                        <option value='CHRYSLER'>CHRYSLER</option>
                        <option value='CITROEN'>CITROEN</option>
                        <option value='CORD'>CORD</option>
                        <option value='COYOTE'>COYOTE</option>
                        <option value='CROSS LANDER'>CROSS LANDER</option>
                        <option value='DAELIM'>DAELIM</option>
                        <option value='DAEWOO'>DAEWOO</option>
                        <option value='DAFRA'>DAFRA</option>
                        <option value='DAIHATSU'>DAIHATSU</option>
                        <option value='DAYANG'>DAYANG</option>
                        <option value='DAYUN'>DAYUN</option>
                        <option value='DE SOTO'>DE SOTO</option>
                        <option value='DELOREAN'>DELOREAN</option>
                        <option value='DERBI'>DERBI</option>
                        <option value='DETOMAZO'>DETOMAZO</option>
                        <option value='DITALLY'>DITALLY</option>
                        <option value='DKW-VEMAG'>DKW-VEMAG</option>
                        <option value='DODGE'>DODGE</option>
                        <option value='DUCAR'>DUCAR</option>
                        <option value='DUCATI'>DUCATI</option>
                        <option value='EAGLE'>EAGLE</option>
                        <option value='EFFA'>EFFA</option>
                        <option value='EMME'>EMME</option>
                        <option value='ENGESA'>ENGESA</option>
                        <option value='ENVEMO'>ENVEMO</option>
                        <option value='FARUS'>FARUS</option>
                        <option value='FBM'>FBM</option>
                        <option value='FERCAR'>FERCAR</option>
                        <option value='FERRARI'>FERRARI</option>
                        <option value='FIAT'>FIAT</option>
                        <option value='FNM'>FNM</option>
                        <option value='FORD'>FORD</option>
                        <option value='FYM'>FYM</option>
                        <option value='GAIOLA'>GAIOLA</option>
                        <option value='GARELLI'>GARELLI</option>
                        <option value='GARINNI'>GARINNI</option>
                        <option value='GARRA'>GARRA</option>
                        <option value='GAS GAS'>GAS GAS</option>
                        <option value='GEELY'>GEELY</option>
                        <option value='GEO'>GEO</option>
                        <option value='GRANCAR'>GRANCAR</option>
                        <option value='GREAT WALL'>GREAT WALL</option>
                        <option value='GREEN'>GREEN</option>
                        <option value='GUERRA'>GUERRA</option>
                        <option value='GURGEL'>GURGEL</option>
                        <option value='HAFEI'>HAFEI</option>
                        <option value='HANOMAG'>HANOMAG</option>
                        <option value='HAOBAO'>HAOBAO</option>
                        <option value='HARLEY-DAVIDSON'>HARLEY-DAVIDSON</option>
                        <option value='HARTFORD'>HARTFORD</option>
                        <option value='HERO'>HERO</option>
                        <option value='HILLMAN'>HILLMAN</option>
                        <option value='HOFSTETTER'>HOFSTETTER</option>
                        <option value='HONDA'>HONDA</option>
                        <option value='HRG'>HRG</option>
                        <option value='HUDSON'>HUDSON</option>
                        <option value='HUMMER'>HUMMER</option>
                        <option value='HUSABERG'>HUSABERG</option>
                        <option value='HUSQVARNA'>HUSQVARNA</option>
                        <option value='HYUNDAI'>HYUNDAI</option>
                        <option value='INDIAN'>INDIAN</option>
                        <option value='INFINITI'>INFINITI</option>
                        <option value='INTERNATIONAL'>INTERNATIONAL</option>
                        <option value='IROS'>IROS</option>
                        <option value='ISUZU'>ISUZU</option>
                        <option value='IVECO'>IVECO</option>
                        <option value='JAC'>JAC</option>
                        <option value='JAGUAR'>JAGUAR</option>
                        <option value='JAWA'>JAWA</option>
                        <option value='JEEP'>JEEP</option>
                        <option value='JIAPENG VOLCANO'>JIAPENG VOLCANO</option>
                        <option value='JINBEI'>JINBEI</option>
                        <option value='JOHNNYPAG'>JOHNNYPAG</option>
                        <option value='JONNY'>JONNY</option>
                        <option value='JPX'>JPX</option>
                        <option value='KAHENA'>KAHENA</option>
                        <option value='KAISER'>KAISER</option>
                        <option value='KARMANN GHIA'>KARMANN GHIA</option>
                        <option value='KART'>KART</option>
                        <option value='KASEA'>KASEA</option>
                        <option value='KASINSKI'>KASINSKI</option>
                        <option value='KAWASAKI'>KAWASAKI</option>
                        <option value='KIA'>KIA</option>
                        <option value='KIMCO'>KIMCO</option>
                        <option value='KOENIGSEGG'>KOENIGSEGG</option>
                        <option value='KTM'>KTM</option>
                        <option value='LADA'>LADA</option>
                        <option value='LAMBORGHINI'>LAMBORGHINI</option>
                        <option value='LAMBRETA'>LAMBRETA</option>
                        <option value='LANCIA'>LANCIA</option>
                        <option value='LAND ROVER'>LAND ROVER</option>
                        <option value='LANDUM'>LANDUM</option>
                        <option value='LAQUILA'>LAQUILA</option>
                        <option value='LAUTOCRAFT'>LAUTOCRAFT</option>
                        <option value='LAUTOMOBILE'>LAUTOMOBILE</option>
                        <option value='LAVRALE'>LAVRALE</option>
                        <option value='LEOPARD'>LEOPARD</option>
                        <option value='LERIVO'>LERIVO</option>
                        <option value='LEXUS'>LEXUS</option>
                        <option value='LIFAN'>LIFAN</option>
                        <option value='LINCOLN'>LINCOLN</option>
                        <option value='LOBINI'>LOBINI</option>
                        <option value='LON-V'>LON-V</option>
                        <option value='LOTUS'>LOTUS</option>
                        <option value='MAHINDRA'>MAHINDRA</option>
                        <option value='MALAGUTI'>MALAGUTI</option>
                        <option value='MAN'>MAN</option>
                        <option value='MARVA'>MARVA</option>
                        <option value='MASERATI'>MASERATI</option>
                        <option value='MATRA'>MATRA</option>
                        <option value='MAYBACH'>MAYBACH</option>
                        <option value='MAZDA'>MAZDA</option>
                        <option value='MCLAREN'>MCLAREN</option>
                        <option value='MENON'>MENON</option>
                        <option value='MERCEDES-BENZ'>MERCEDES-BENZ</option>
                        <option value='MERCURY'>MERCURY</option>
                        <option value='MG'>MG</option>
                        <option value='MICHIGAN'>MICHIGAN</option>
                        <option value='MINI'>MINI</option>
                        <option value='MITSUBISHI'>MITSUBISHI</option>
                        <option value='MIURA'>MIURA</option>
                        <option value='MIZA'>MIZA</option>
                        <option value='MOBILETE'>MOBILETE</option>
                        <option value='MORRIS'>MORRIS</option>
                        <option value='MOTO GUZZI'>MOTO GUZZI</option>
                        <option value='MOTOR-HOME'>MOTOR-HOME</option>
                        <option value='MP LAFER'>MP LAFER</option>
                        <option value='MPLM'>MPLM</option>
                        <option value='MRX'>MRX</option>
                        <option value='MV AUGUSTA'>MV AUGUSTA</option>
                        <option value='MVK'>MVK</option>
                        <option value='NAVISTAR'>NAVISTAR</option>
                        <option value='NEWTRACK'>NEWTRACK</option>
                        <option value='NISSAN'>NISSAN</option>
                        <option value='NISSIN'>NISSIN</option>
                        <option value='OLDSMOBILE'>OLDSMOBILE</option>
                        <option value='ONIBUS'>ONIBUS</option>
                        <option value='ORCA'>ORCA</option>
                        <option value='OUTROS'>OUTROS</option>
                        <option value='PAG'>PAG</option>
                        <option value='PAGANI'>PAGANI</option>
                        <option value='PEGASSI'>PEGASSI</option>
                        <option value='PEUGEOT'>PEUGEOT</option>
                        <option value='PIAGGIO'>PIAGGIO</option>
                        <option value='PLYMOUTH'>PLYMOUTH</option>
                        <option value='POLARIS'>POLARIS</option>
                        <option value='PONTIAC'>PONTIAC</option>
                        <option value='PORSCHE'>PORSCHE</option>
                        <option value='PUMA'>PUMA</option>
                        <option value='RANDON'>RANDON</option>
                        <option value='REGAL RAPTOR'>REGAL RAPTOR</option>
                        <option value='RELY'>RELY</option>
                        <option value='RENAULT'>RENAULT</option>
                        <option value='RENO'>RENO</option>
                        <option value='REVA-I'>REVA-I</option>
                        <option value='ROLLS-ROYCE'>ROLLS-ROYCE</option>
                        <option value='ROMI'>ROMI</option>
                        <option value='SAAB'>SAAB</option>
                        <option value='SANYANG'>SANYANG</option>
                        <option value='SATURN'>SATURN</option>
                        <option value='SCANIA'>SCANIA</option>
                        <option value='SCHIFFER'>SCHIFFER</option>
                        <option value='SCOOTER'>SCOOTER</option>
                        <option value='SEAT'>SEAT</option>
                        <option value='SHINERAY'>SHINERAY</option>
                        <option value='SHORT'>SHORT</option>
                        <option value='SIAMOTO'>SIAMOTO</option>
                        <option value='SIMCA'>SIMCA</option>
                        <option value='SINOTRUK'>SINOTRUK</option>
                        <option value='SKODA'>SKODA</option>
                        <option value='SMART'>SMART</option>
                        <option value='SPYKER'>SPYKER</option>
                        <option value='SSANGYONG'>SSANGYONG</option>
                        <option value='STANDARD'>STANDARD</option>
                        <option value='STUDEBAKER'>STUDEBAKER</option>
                        <option value='SUBARU'>SUBARU</option>
                        <option value='SUNDOWN'>SUNDOWN</option>
                        <option value='SUZUKI'>SUZUKI</option>
                        <option value='SWELL MINI'>SWELL MINI</option>
                        <option value='TAC'>TAC</option>
                        <option value='TANGER'>TANGER</option>
                        <option value='TARGOS'>TARGOS</option>
                        <option value='TATA'>TATA</option>
                        <option value='TOYOTA'>TOYOTA</option>
                        <option value='TRAILER'>TRAILER</option>
                        <option value='TRAXX'>TRAXX</option>
                        <option value='TRICICLO'>TRICICLO</option>
                        <option value='TRICKER'>TRICKER</option>
                        <option value='TRIUMPH'>TRIUMPH</option>
                        <option value='TROLLER'>TROLLER</option>
                        <option value='UNIMOG'>UNIMOG</option>
                        <option value='UTILITARIOS AGRICOLAS'>UTILITARIOS AGRICOLAS</option>
                        <option value='UTILITARIOS PESADOS'>UTILITARIOS PESADOS</option>
                        <option value='VENTO'>VENTO</option>
                        <option value='VICTORY'>VICTORY</option>
                        <option value='VOLKSWAGEN'>VOLKSWAGEN</option>
                        <option value='VOLVO'>VOLVO</option>
                        <option value='WALK MACHINE'>WALK MACHINE</option>
                        <option value='WIESMANN'>WIESMANN</option>
                        <option value='WILLYS OVERLAND'>WILLYS OVERLAND</option>
                        <option value='WOLVER'>WOLVER</option>
                        <option value='WUYANG'>WUYANG</option>
                        <option value='X MOTOS'>X MOTOS</option>
                        <option value='YAMAHA'>YAMAHA</option>
                        <option value='ZONGSHEN'>ZONGSHEN</option>
                        <option value='CHEV'>CHEVROLET</option>
                      </select>
                      <small id="error_automakers" class="text-danger error-text"></small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
              <div class="row">
                <div class="col-6 col-md-4">
                  <label for="" class="control-label">Chassi</label>
                  <input type="text" name="chassi" class="form-control input_cpf_cnpj" required maxlength="20" value="{{ $vehicle->chassi ?? '' }}">
                  <small id="error_chassi" class="text-danger error-text"></small>
                </div>
                <div class="col-6 col-md-4">
                  <label for="" class="control-label">Odometro</label>
                  <input type="text" name="odometer" class="form-control input_cpf_cnpj" required maxlength="20" value="{{ $vehicle->odometer ?? '' }}">
                  <small id="error_odometer" class="text-danger error-text"></small>
                </div>
                <div class="col-6 col-md-4">
                  <label for="" class="control-label">Modelo</label>
                  <input type="text" name="model" class="form-control model" required maxlength="20" value="{{ $vehicle->model ?? '' }}">
                  <small id="error_model" class="text-danger error-text"></small>
                </div>
              </div>

              <!-- Columns are always 50% wide, on mobile and desktop -->
              <div class="row">
                <div class="col-6">
                  <label for="" class="control-label">Ano</label>
                  <input type="number" name="year" class="form-control year" required maxlength="20" value="{{ $vehicle->year ?? '' }}">
                  <small id="error_year" class="text-danger error-text"></small>
                </div>
                <div class="col-6">
                  <label for="" class="control-label">Cor</label>
                  <input type="text" name="color" class="form-control color" required maxlength="20" value="{{ $vehicle->color ?? '' }}">
                  <small id="error_color" class="text-danger error-text"></small>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h3> Dados da Manutenção</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="" class="control-label">Data</label>
              <input type="date" name="date" class="form-control year" required maxlength="20" value="{{ $vehicle->maintenance->date ?? '' }}">
              <small id="error_date" class="text-danger error-text"></small>
            </div>
            <div class="col-6">
              <label for="" class="control-label">Descrição</label>
              <input type="text" name="description" class="form-control color" required maxlength="20" value="{{ $vehicle->maintenance->description ?? '' }}">
              <small id="error_description" class="text-danger error-text"></small>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8">
          <div class="col-md-6">
            <button type="button" class="btn btn-lg btn-success" id="btn-continuar"><i class="fa fa-check"></i> Salvar</button>
          </div>
        </div>
      </div>
      </form>
    </div>

  </div>
</div>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#btn-continuar').click(function() {
      $(this).html('Aguarde...')
      var client_id = $('#id').val();
      ajax_store(client_id, $('#form-register-vehicle').serialize());
      $(this).html('<i class="fa fa-check"></i>  Salvar');
    });
  });

  function ajax_store(id, form_data, reload = false) {
    var msgSuccess = "{{ isset($vehicle->id) ? 'Veículo atualizado com sucesso' : 'Veículo cadastrado com sucesso' }}";
    var method = "{{ isset($vehicle->id) ? 'PUT' : 'POST' }}";
    var url = "{{ isset($vehicle->id) ? route('vehicles.update', $vehicle->id) : route('vehicles.store') }}";

    $.ajax({
      url: url,
      type: method,
      data: form_data,
      success: function(response) {
        Swal.fire({
          icon: 'success',
          title: msgSuccess,
          showConfirmButton: true,
        }).then(okay => {
          if (okay) {
            $(location).attr('href', '{{url("/veiculo")}}');
          }
        });
      },
      error: function(error) {
        const items = error.responseJSON;
        $('.error-text').html('');
        Object.keys(items).forEach(function(item) {
          $("#error_" + item).html(items[item]);
        });
        Swal.fire({
          icon: 'error',
          title: 'Verifique os campos obrigatórios',
          showConfirmButton: true,
        });
      }
    });
  }
</script>
@endsection