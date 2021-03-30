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
                        <option {{old('vehicle_type', $vehicle->vehicle_type)=="Passeio"? 'selected':''}} value="Passeio">Passeio</option>
                        <option {{old('vehicle_type', $vehicle->vehicle_type)=="Caminhão"? 'selected':''}} value="Caminhão">Caminhão</option>
                        <option {{old('vehicle_type', $vehicle->vehicle_type)=="Moto"? 'selected':''}} value="Moto">Moto</option>
                        <option {{old('vehicle_type', $vehicle->vehicle_type)=="Máquina"? 'selected':''}} value="Máquina">Máquina</option>
                      </select>
                      <small id="error_vehicle_type" class="text-danger error-text"></small>
                    </div>
                    <div class="col-6 col-md-5">
                      <label for="" class="control-label">Montadora</label>
                      <select class="form-control" name="automakers" id="marca" required>
                        <option {{old('automakers', $vehicle->automakers)==" "? 'selected':''}} value=''></option>
                        <option {{old('automakers', $vehicle->automakers)=="ACELLERA"? 'selected':''}} value='ACELLERA'>ACELLERA</option>
                        <option {{old('automakers', $vehicle->automakers)=="ACURA"? 'selected':''}} value='ACURA'>ACURA</option>
                        <option {{old('automakers', $vehicle->automakers)=="ADAMO"? 'selected':''}} value='ADAMO'>ADAMO</option>
                        <option {{old('automakers', $vehicle->automakers)=="ADLY"? 'selected':''}} value='ADLY'>ADLY</option>
                        <option {{old('automakers', $vehicle->automakers)=="AGRALE"? 'selected':''}} value='AGRALE'>AGRALE</option>
                        <option {{old('automakers', $vehicle->automakers)=="ALFA ROMEO"? 'selected':''}} value='ALFA ROMEO'>ALFA ROMEO</option>
                        <option {{old('automakers', $vehicle->automakers)=="AM GEN"? 'selected':''}} value='AM GEN'>AM GEN</option>
                        <option {{old('automakers', $vehicle->automakers)=="AMAZONAS"? 'selected':''}} value='AMAZONAS'>AMAZONAS</option>
                        <option {{old('automakers', $vehicle->automakers)=="AMERICAR"? 'selected':''}} value='AMERICAR'>AMERICAR</option>
                        <option {{old('automakers', $vehicle->automakers)=="APRILIA"? 'selected':''}} value='APRILIA'>APRILIA</option>
                        <option {{old('automakers', $vehicle->automakers)=="ARIEL"? 'selected':''}} value='ARIEL'>ARIEL</option>
                        <option {{old('automakers', $vehicle->automakers)=="ASTON MARTIN"? 'selected':''}} value='ASTON MARTIN'>ASTON MARTIN</option>
                        <option {{old('automakers', $vehicle->automakers)=="ATALA"? 'selected':''}} value='ATALA'>ATALA</option>
                        <option {{old('automakers', $vehicle->automakers)=="AUDI"? 'selected':''}} value='AUDI'>AUDI</option>
                        <option {{old('automakers', $vehicle->automakers)=="BAJAJ"? 'selected':''}} value='BAJAJ'>BAJAJ</option>
                        <option {{old('automakers', $vehicle->automakers)=="BEACH"? 'selected':''}} value='BEACH'>BEACH</option>
                        <option {{old('automakers', $vehicle->automakers)=="BENELLI"? 'selected':''}} value='BENELLI'>BENELLI</option>
                        <option {{old('automakers', $vehicle->automakers)=="BENTLEY"? 'selected':''}} value='BENTLEY'>BENTLEY</option>
                        <option {{old('automakers', $vehicle->automakers)=="BETA"? 'selected':''}} value='BETA'>BETA</option>
                        <option {{old('automakers', $vehicle->automakers)=="BIANCO"? 'selected':''}} value='BIANCO'>BIANCO</option>
                        <option {{old('automakers', $vehicle->automakers)=="BIMOTA"? 'selected':''}} value='BIMOTA'>BIMOTA</option>
                        <option {{old('automakers', $vehicle->automakers)=="BIRELLI"? 'selected':''}} value='BIRELLI'>BIRELLI</option>
                        <option {{old('automakers', $vehicle->automakers)=="BMW"? 'selected':''}} value='BMW'>BMW</option>
                        <option {{old('automakers', $vehicle->automakers)=="BORGWARD"? 'selected':''}} value='BORGWARD'>BORGWARD</option>
                        <option {{old('automakers', $vehicle->automakers)=="BRANDY"? 'selected':''}} value='BRANDY'>BRANDY</option>
                        <option {{old('automakers', $vehicle->automakers)=="BRAVA"? 'selected':''}} value='BRAVA'>BRAVA</option>
                        <option {{old('automakers', $vehicle->automakers)=="BRAVAX"? 'selected':''}} value='BRAVAX'>BRAVAX</option>
                        <option {{old('automakers', $vehicle->automakers)=="BRILLIANCE"? 'selected':''}} value='BRILLIANCE'>BRILLIANCE</option>
                        <option {{old('automakers', $vehicle->automakers)=="BRP"? 'selected':''}} value='BRP'>BRP</option>
                        <option {{old('automakers', $vehicle->automakers)=="BUELL"? 'selected':''}} value='BUELL'>BUELL</option>
                        <option {{old('automakers', $vehicle->automakers)=="BUENO"? 'selected':''}} value='BUENO'>BUENO</option>
                        <option {{old('automakers', $vehicle->automakers)=="BUGATTI"? 'selected':''}} value='BUGATTI'>BUGATTI</option>
                        <option {{old('automakers', $vehicle->automakers)=="BUGGY"? 'selected':''}} value='BUGGY'>BUGGY</option>
                        <option {{old('automakers', $vehicle->automakers)=="BUICK"? 'selected':''}} value='BUICK'>BUICK</option>
                        <option {{old('automakers', $vehicle->automakers)=="BULL"? 'selected':''}} value='BULL'>BULL</option>
                        <option {{old('automakers', $vehicle->automakers)=="CADILLAC"? 'selected':''}} value='CADILLAC'>CADILLAC</option>
                        <option {{old('automakers', $vehicle->automakers)=="CAGIVA"? 'selected':''}} value='CAGIVA'>CAGIVA</option>
                        <option {{old('automakers', $vehicle->automakers)=="CAN-AM"? 'selected':''}} value='CAN-AM'>CAN-AM</option>
                        <option {{old('automakers', $vehicle->automakers)=="CBT"? 'selected':''}} value='CBT'>CBT</option>
                        <option {{old('automakers', $vehicle->automakers)=="CHAMONIX"? 'selected':''}} value='CHAMONIX'>CHAMONIX</option>
                        <option {{old('automakers', $vehicle->automakers)=="CHANA"? 'selected':''}} value='CHANA'>CHANA</option>
                        <option {{old('automakers', $vehicle->automakers)=="CHEDA"? 'selected':''}} value='CHEDA'>CHEDA</option>
                        <option {{old('automakers', $vehicle->automakers)=="CHERY"? 'selected':''}} value='CHERY'>CHERY</option>
                        <option {{old('automakers', $vehicle->automakers)=="CHEVROLET"? 'selected':''}} value='CHEVROLET'>CHEVROLET</option>
                        <option {{old('automakers', $vehicle->automakers)=="CHRYSLER"? 'selected':''}} value='CHRYSLER'>CHRYSLER</option>
                        <option {{old('automakers', $vehicle->automakers)=="CITROEN"? 'selected':''}} value='CITROEN'>CITROEN</option>
                        <option {{old('automakers', $vehicle->automakers)=="CORD"? 'selected':''}} value='CORD'>CORD</option>
                        <option {{old('automakers', $vehicle->automakers)=="COYOTE"? 'selected':''}} value='COYOTE'>COYOTE</option>
                        <option {{old('automakers', $vehicle->automakers)=="CROSS LANDER"? 'selected':''}} value='CROSS LANDER'>CROSS LANDER</option>
                        <option {{old('automakers', $vehicle->automakers)=="DAELIM"? 'selected':''}} value='DAELIM'>DAELIM</option>
                        <option {{old('automakers', $vehicle->automakers)=="DAEWOO"? 'selected':''}} value='DAEWOO'>DAEWOO</option>
                        <option {{old('automakers', $vehicle->automakers)=="DAFRA"? 'selected':''}} value='DAFRA'>DAFRA</option>
                        <option {{old('automakers', $vehicle->automakers)=="DAIHATSU"? 'selected':''}} value='DAIHATSU'>DAIHATSU</option>
                        <option {{old('automakers', $vehicle->automakers)=="DAYANG"? 'selected':''}} value='DAYANG'>DAYANG</option>
                        <option {{old('automakers', $vehicle->automakers)=="DAYUN"? 'selected':''}} value='DAYUN'>DAYUN</option>
                        <option {{old('automakers', $vehicle->automakers)=="DE SOTO"? 'selected':''}} value='DE SOTO'>DE SOTO</option>
                        <option {{old('automakers', $vehicle->automakers)=="DELOREAN"? 'selected':''}} value='DELOREAN'>DELOREAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="DERBI"? 'selected':''}} value='DERBI'>DERBI</option>
                        <option {{old('automakers', $vehicle->automakers)=="DETOMAZO"? 'selected':''}} value='DETOMAZO'>DETOMAZO</option>
                        <option {{old('automakers', $vehicle->automakers)=="DITALLY"? 'selected':''}} value='DITALLY'>DITALLY</option>
                        <option {{old('automakers', $vehicle->automakers)=="DKW-VEMAG"? 'selected':''}} value='DKW-VEMAG'>DKW-VEMAG</option>
                        <option {{old('automakers', $vehicle->automakers)=="DODGE"? 'selected':''}} value='DODGE'>DODGE</option>
                        <option {{old('automakers', $vehicle->automakers)=="DUCAR"? 'selected':''}} value='DUCAR'>DUCAR</option>
                        <option {{old('automakers', $vehicle->automakers)=="DUCATI"? 'selected':''}} value='DUCATI'>DUCATI</option>
                        <option {{old('automakers', $vehicle->automakers)=="EAGLE"? 'selected':''}} value='EAGLE'>EAGLE</option>
                        <option {{old('automakers', $vehicle->automakers)=="EFFA"? 'selected':''}} value='EFFA'>EFFA</option>
                        <option {{old('automakers', $vehicle->automakers)=="EMME"? 'selected':''}} value='EMME'>EMME</option>
                        <option {{old('automakers', $vehicle->automakers)=="ENGESA"? 'selected':''}} value='ENGESA'>ENGESA</option>
                        <option {{old('automakers', $vehicle->automakers)=="ENVEMO"? 'selected':''}} value='ENVEMO'>ENVEMO</option>
                        <option {{old('automakers', $vehicle->automakers)=="FARUS"? 'selected':''}} value='FARUS'>FARUS</option>
                        <option {{old('automakers', $vehicle->automakers)=="FBM"? 'selected':''}} value='FBM'>FBM</option>
                        <option {{old('automakers', $vehicle->automakers)=="FERCAR"? 'selected':''}} value='FERCAR'>FERCAR</option>
                        <option {{old('automakers', $vehicle->automakers)=="FERRARI"? 'selected':''}} value='FERRARI'>FERRARI</option>
                        <option {{old('automakers', $vehicle->automakers)=="FIAT"? 'selected':''}} value='FIAT'>FIAT</option>
                        <option {{old('automakers', $vehicle->automakers)=="FNM"? 'selected':''}} value='FNM'>FNM</option>
                        <option {{old('automakers', $vehicle->automakers)=="FORD"? 'selected':''}} value='FORD'>FORD</option>
                        <option {{old('automakers', $vehicle->automakers)=="FYM"? 'selected':''}} value='FYM'>FYM</option>
                        <option {{old('automakers', $vehicle->automakers)=="GAIOLA"? 'selected':''}} value='GAIOLA'>GAIOLA</option>
                        <option {{old('automakers', $vehicle->automakers)=="GARELLI"? 'selected':''}} value='GARELLI'>GARELLI</option>
                        <option {{old('automakers', $vehicle->automakers)=="GARINNI"? 'selected':''}} value='GARINNI'>GARINNI</option>
                        <option {{old('automakers', $vehicle->automakers)=="GARRA"? 'selected':''}} value='GARRA'>GARRA</option>
                        <option {{old('automakers', $vehicle->automakers)=="GAS GAS"? 'selected':''}} value='GAS GAS'>GAS GAS</option>
                        <option {{old('automakers', $vehicle->automakers)=="GEELY"? 'selected':''}} value='GEELY'>GEELY</option>
                        <option {{old('automakers', $vehicle->automakers)=="GEO"? 'selected':''}} value='GEO'>GEO</option>
                        <option {{old('automakers', $vehicle->automakers)=="GRANCAR"? 'selected':''}} value='GRANCAR'>GRANCAR</option>
                        <option {{old('automakers', $vehicle->automakers)=="GREAT WALL"? 'selected':''}} value='GREAT WALL'>GREAT WALL</option>
                        <option {{old('automakers', $vehicle->automakers)=="GREEN"? 'selected':''}} value='GREEN'>GREEN</option>
                        <option {{old('automakers', $vehicle->automakers)=="GUERRA"? 'selected':''}} value='GUERRA'>GUERRA</option>
                        <option {{old('automakers', $vehicle->automakers)=="GURGEL"? 'selected':''}} value='GURGEL'>GURGEL</option>
                        <option {{old('automakers', $vehicle->automakers)=="HAFEI"? 'selected':''}} value='HAFEI'>HAFEI</option>
                        <option {{old('automakers', $vehicle->automakers)=="HANOMAG"? 'selected':''}} value='HANOMAG'>HANOMAG</option>
                        <option {{old('automakers', $vehicle->automakers)=="HAOBAO"? 'selected':''}} value='HAOBAO'>HAOBAO</option>
                        <option {{old('automakers', $vehicle->automakers)=="HARLEY-DAVIDSON"? 'selected':''}} value='HARLEY-DAVIDSON'>HARLEY-DAVIDSON</option>
                        <option {{old('automakers', $vehicle->automakers)=="HARTFORD"? 'selected':''}} value='HARTFORD'>HARTFORD</option>
                        <option {{old('automakers', $vehicle->automakers)=="HERO"? 'selected':''}} value='HERO'>HERO</option>
                        <option {{old('automakers', $vehicle->automakers)=="HILLMAN"? 'selected':''}} value='HILLMAN'>HILLMAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="HOFSTETTER"? 'selected':''}} value='HOFSTETTER'>HOFSTETTER</option>
                        <option {{old('automakers', $vehicle->automakers)=="HONDA"? 'selected':''}} value='HONDA'>HONDA</option>
                        <option {{old('automakers', $vehicle->automakers)=="HRG"? 'selected':''}} value='HRG'>HRG</option>
                        <option {{old('automakers', $vehicle->automakers)=="HUDSON"? 'selected':''}} value='HUDSON'>HUDSON</option>
                        <option {{old('automakers', $vehicle->automakers)=="HUMMER"? 'selected':''}} value='HUMMER'>HUMMER</option>
                        <option {{old('automakers', $vehicle->automakers)=="HUSABERG"? 'selected':''}} value='HUSABERG'>HUSABERG</option>
                        <option {{old('automakers', $vehicle->automakers)=="HUSQVARNA"? 'selected':''}} value='HUSQVARNA'>HUSQVARNA</option>
                        <option {{old('automakers', $vehicle->automakers)=="HYUNDAI"? 'selected':''}} value='HYUNDAI'>HYUNDAI</option>
                        <option {{old('automakers', $vehicle->automakers)=="INDIAN"? 'selected':''}} value='INDIAN'>INDIAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="INFINITI"? 'selected':''}} value='INFINITI'>INFINITI</option>
                        <option {{old('automakers', $vehicle->automakers)=="INTERNATIONAL"? 'selected':''}} value='INTERNATIONAL'>INTERNATIONAL</option>
                        <option {{old('automakers', $vehicle->automakers)=="IROS"? 'selected':''}} value='IROS'>IROS</option>
                        <option {{old('automakers', $vehicle->automakers)=="ISUZU"? 'selected':''}} value='ISUZU'>ISUZU</option>
                        <option {{old('automakers', $vehicle->automakers)=="IVECO"? 'selected':''}} value='IVECO'>IVECO</option>
                        <option {{old('automakers', $vehicle->automakers)=="JAC"? 'selected':''}} value='JAC'>JAC</option>
                        <option {{old('automakers', $vehicle->automakers)=="JAGUAR"? 'selected':''}} value='JAGUAR'>JAGUAR</option>
                        <option {{old('automakers', $vehicle->automakers)=="JAWA"? 'selected':''}} value='JAWA'>JAWA</option>
                        <option {{old('automakers', $vehicle->automakers)=="JEEP"? 'selected':''}} value='JEEP'>JEEP</option>
                        <option {{old('automakers', $vehicle->automakers)=="JIAPENG VOLCANO"? 'selected':''}} value='JIAPENG VOLCANO'>JIAPENG VOLCANO</option>
                        <option {{old('automakers', $vehicle->automakers)=="JINBEI"? 'selected':''}} value='JINBEI'>JINBEI</option>
                        <option {{old('automakers', $vehicle->automakers)=="JOHNNYPAG"? 'selected':''}} value='JOHNNYPAG'>JOHNNYPAG</option>
                        <option {{old('automakers', $vehicle->automakers)=="JONNY"? 'selected':''}} value='JONNY'>JONNY</option>
                        <option {{old('automakers', $vehicle->automakers)=="JPX"? 'selected':''}} value='JPX'>JPX</option>
                        <option {{old('automakers', $vehicle->automakers)=="KAHENA"? 'selected':''}} value='KAHENA'>KAHENA</option>
                        <option {{old('automakers', $vehicle->automakers)=="KAISER"? 'selected':''}} value='KAISER'>KAISER</option>
                        <option {{old('automakers', $vehicle->automakers)=="KARMANN GHIA"? 'selected':''}} value='KARMANN GHIA'>KARMANN GHIA</option>
                        <option {{old('automakers', $vehicle->automakers)=="KART"? 'selected':''}} value='KART'>KART</option>
                        <option {{old('automakers', $vehicle->automakers)=="KASEA"? 'selected':''}} value='KASEA'>KASEA</option>
                        <option {{old('automakers', $vehicle->automakers)=="KASINSKI"? 'selected':''}} value='KASINSKI'>KASINSKI</option>
                        <option {{old('automakers', $vehicle->automakers)=="KAWASAKI"? 'selected':''}} value='KAWASAKI'>KAWASAKI</option>
                        <option {{old('automakers', $vehicle->automakers)=="KIA"? 'selected':''}} value='KIA'>KIA</option>
                        <option {{old('automakers', $vehicle->automakers)=="KIMCO"? 'selected':''}} value='KIMCO'>KIMCO</option>
                        <option {{old('automakers', $vehicle->automakers)=="KOENIGSEGG"? 'selected':''}} value='KOENIGSEGG'>KOENIGSEGG</option>
                        <option {{old('automakers', $vehicle->automakers)=="KTM"? 'selected':''}} value='KTM'>KTM</option>
                        <option {{old('automakers', $vehicle->automakers)=="LADA"? 'selected':''}} value='LADA'>LADA</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAMBORGHINI"? 'selected':''}} value='LAMBORGHINI'>LAMBORGHINI</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAMBRETA"? 'selected':''}} value='LAMBRETA'>LAMBRETA</option>
                        <option {{old('automakers', $vehicle->automakers)=="LANCIA"? 'selected':''}} value='LANCIA'>LANCIA</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAND ROVER"? 'selected':''}} value='LAND ROVER'>LAND ROVER</option>
                        <option {{old('automakers', $vehicle->automakers)=="LANDUM"? 'selected':''}} value='LANDUM'>LANDUM</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAQUILA"? 'selected':''}} value='LAQUILA'>LAQUILA</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAUTOCRAFT"? 'selected':''}} value='LAUTOCRAFT'>LAUTOCRAFT</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAUTOMOBILE"? 'selected':''}} value='LAUTOMOBILE'>LAUTOMOBILE</option>
                        <option {{old('automakers', $vehicle->automakers)=="LAVRALE"? 'selected':''}} value='LAVRALE'>LAVRALE</option>
                        <option {{old('automakers', $vehicle->automakers)=="LEOPARD"? 'selected':''}} value='LEOPARD'>LEOPARD</option>
                        <option {{old('automakers', $vehicle->automakers)=="LERIVO"? 'selected':''}} value='LERIVO'>LERIVO</option>
                        <option {{old('automakers', $vehicle->automakers)=="LEXUS"? 'selected':''}} value='LEXUS'>LEXUS</option>
                        <option {{old('automakers', $vehicle->automakers)=="LIFAN"? 'selected':''}} value='LIFAN'>LIFAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="LINCOLN"? 'selected':''}} value='LINCOLN'>LINCOLN</option>
                        <option {{old('automakers', $vehicle->automakers)=="LOBINI"? 'selected':''}} value='LOBINI'>LOBINI</option>
                        <option {{old('automakers', $vehicle->automakers)=="LON-V"? 'selected':''}} value='LON-V'>LON-V</option>
                        <option {{old('automakers', $vehicle->automakers)=="LOTUS"? 'selected':''}} value='LOTUS'>LOTUS</option>
                        <option {{old('automakers', $vehicle->automakers)=="MAHINDRA"? 'selected':''}} value='MAHINDRA'>MAHINDRA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MALAGUTI"? 'selected':''}} value='MALAGUTI'>MALAGUTI</option>
                        <option {{old('automakers', $vehicle->automakers)=="MAN"? 'selected':''}} value='MAN'>MAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="MARVA"? 'selected':''}} value='MARVA'>MARVA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MASERATI"? 'selected':''}} value='MASERATI'>MASERATI</option>
                        <option {{old('automakers', $vehicle->automakers)=="MATRA"? 'selected':''}} value='MATRA'>MATRA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MAYBACH"? 'selected':''}} value='MAYBACH'>MAYBACH</option>
                        <option {{old('automakers', $vehicle->automakers)=="MAZDA"? 'selected':''}} value='MAZDA'>MAZDA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MCLAREN"? 'selected':''}} value='MCLAREN'>MCLAREN</option>
                        <option {{old('automakers', $vehicle->automakers)=="MENON"? 'selected':''}} value='MENON'>MENON</option>
                        <option {{old('automakers', $vehicle->automakers)=="MERCEDES-BENZ"? 'selected':''}} value='MERCEDES-BENZ'>MERCEDES-BENZ</option>
                        <option {{old('automakers', $vehicle->automakers)=="MERCURY"? 'selected':''}} value='MERCURY'>MERCURY</option>
                        <option {{old('automakers', $vehicle->automakers)=="MG"? 'selected':''}} value='MG'>MG</option>
                        <option {{old('automakers', $vehicle->automakers)=="MICHIGAN"? 'selected':''}} value='MICHIGAN'>MICHIGAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="MINI"? 'selected':''}} value='MINI'>MINI</option>
                        <option {{old('automakers', $vehicle->automakers)=="MITSUBISHI"? 'selected':''}} value='MITSUBISHI'>MITSUBISHI</option>
                        <option {{old('automakers', $vehicle->automakers)=="MIURA"? 'selected':''}} value='MIURA'>MIURA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MIZA"? 'selected':''}} value='MIZA'>MIZA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MOBILETE"? 'selected':''}} value='MOBILETE'>MOBILETE</option>
                        <option {{old('automakers', $vehicle->automakers)=="MORRIS"? 'selected':''}} value='MORRIS'>MORRIS</option>
                        <option {{old('automakers', $vehicle->automakers)=="MOTO GUZZI"? 'selected':''}} value='MOTO GUZZI'>MOTO GUZZI</option>
                        <option {{old('automakers', $vehicle->automakers)=="MOTOR-HOME"? 'selected':''}} value='MOTOR-HOME'>MOTOR-HOME</option>
                        <option {{old('automakers', $vehicle->automakers)=="MP LAFER"? 'selected':''}} value='MP LAFER'>MP LAFER</option>
                        <option {{old('automakers', $vehicle->automakers)=="MPLM"? 'selected':''}} value='MPLM'>MPLM</option>
                        <option {{old('automakers', $vehicle->automakers)=="MRX"? 'selected':''}} value='MRX'>MRX</option>
                        <option {{old('automakers', $vehicle->automakers)=="MV AUGUSTA"? 'selected':''}} value='MV AUGUSTA'>MV AUGUSTA</option>
                        <option {{old('automakers', $vehicle->automakers)=="MVK"? 'selected':''}} value='MVK'>MVK</option>
                        <option {{old('automakers', $vehicle->automakers)=="NAVISTAR"? 'selected':''}} value='NAVISTAR'>NAVISTAR</option>
                        <option {{old('automakers', $vehicle->automakers)=="NEWTRACK"? 'selected':''}} value='NEWTRACK'>NEWTRACK</option>
                        <option {{old('automakers', $vehicle->automakers)=="NISSAN"? 'selected':''}} value='NISSAN'>NISSAN</option>
                        <option {{old('automakers', $vehicle->automakers)=="NISSIN"? 'selected':''}} value='NISSIN'>NISSIN</option>
                        <option {{old('automakers', $vehicle->automakers)=="OLDSMOBILE"? 'selected':''}} value='OLDSMOBILE'>OLDSMOBILE</option>
                        <option {{old('automakers', $vehicle->automakers)=="ONIBUS"? 'selected':''}} value='ONIBUS'>ONIBUS</option>
                        <option {{old('automakers', $vehicle->automakers)=="ORCA"? 'selected':''}} value='ORCA'>ORCA</option>
                        <option {{old('automakers', $vehicle->automakers)=="OUTROS"? 'selected':''}} value='OUTROS'>OUTROS</option>
                        <option {{old('automakers', $vehicle->automakers)=="PAG"? 'selected':''}} value='PAG'>PAG</option>
                        <option {{old('automakers', $vehicle->automakers)=="PAGANI"? 'selected':''}} value='PAGANI'>PAGANI</option>
                        <option {{old('automakers', $vehicle->automakers)=="PEGASSI"? 'selected':''}} value='PEGASSI'>PEGASSI</option>
                        <option {{old('automakers', $vehicle->automakers)=="PEUGEOT"? 'selected':''}} value='PEUGEOT'>PEUGEOT</option>
                        <option {{old('automakers', $vehicle->automakers)=="PIAGGIO"? 'selected':''}} value='PIAGGIO'>PIAGGIO</option>
                        <option {{old('automakers', $vehicle->automakers)=="PLYMOUTH"? 'selected':''}} value='PLYMOUTH'>PLYMOUTH</option>
                        <option {{old('automakers', $vehicle->automakers)=="POLARIS"? 'selected':''}} value='POLARIS'>POLARIS</option>
                        <option {{old('automakers', $vehicle->automakers)=="PONTIAC"? 'selected':''}} value='PONTIAC'>PONTIAC</option>
                        <option {{old('automakers', $vehicle->automakers)=="PORSCHE"? 'selected':''}} value='PORSCHE'>PORSCHE</option>
                        <option {{old('automakers', $vehicle->automakers)=="PUMA"? 'selected':''}} value='PUMA'>PUMA</option>
                        <option {{old('automakers', $vehicle->automakers)=="RANDON"? 'selected':''}} value='RANDON'>RANDON</option>
                        <option {{old('automakers', $vehicle->automakers)=="REGAL RAPTOR"? 'selected':''}} value='REGAL RAPTOR'>REGAL RAPTOR</option>
                        <option {{old('automakers', $vehicle->automakers)=="RELY"? 'selected':''}} value='RELY'>RELY</option>
                        <option {{old('automakers', $vehicle->automakers)=="RENAULT"? 'selected':''}} value='RENAULT'>RENAULT</option>
                        <option {{old('automakers', $vehicle->automakers)=="RENO"? 'selected':''}} value='RENO'>RENO</option>
                        <option {{old('automakers', $vehicle->automakers)=="REVA-I"? 'selected':''}} value='REVA-I'>REVA-I</option>
                        <option {{old('automakers', $vehicle->automakers)=="ROLLS-ROYCE"? 'selected':''}} value='ROLLS-ROYCE'>ROLLS-ROYCE</option>
                        <option {{old('automakers', $vehicle->automakers)=="ROMI"? 'selected':''}} value='ROMI'>ROMI</option>
                        <option {{old('automakers', $vehicle->automakers)=="SAAB"? 'selected':''}} value='SAAB'>SAAB</option>
                        <option {{old('automakers', $vehicle->automakers)=="SANYANG"? 'selected':''}} value='SANYANG'>SANYANG</option>
                        <option {{old('automakers', $vehicle->automakers)=="SATURN"? 'selected':''}} value='SATURN'>SATURN</option>
                        <option {{old('automakers', $vehicle->automakers)=="SCANIA"? 'selected':''}} value='SCANIA'>SCANIA</option>
                        <option {{old('automakers', $vehicle->automakers)=="SCHIFFER"? 'selected':''}} value='SCHIFFER'>SCHIFFER</option>
                        <option {{old('automakers', $vehicle->automakers)=="SCOOTER"? 'selected':''}} value='SCOOTER'>SCOOTER</option>
                        <option {{old('automakers', $vehicle->automakers)=="SEAT"? 'selected':''}} value='SEAT'>SEAT</option>
                        <option {{old('automakers', $vehicle->automakers)=="SHINERAY"? 'selected':''}} value='SHINERAY'>SHINERAY</option>
                        <option {{old('automakers', $vehicle->automakers)=="SHORT"? 'selected':''}} value='SHORT'>SHORT</option>
                        <option {{old('automakers', $vehicle->automakers)=="SIAMOTO"? 'selected':''}} value='SIAMOTO'>SIAMOTO</option>
                        <option {{old('automakers', $vehicle->automakers)=="SIMCA"? 'selected':''}} value='SIMCA'>SIMCA</option>
                        <option {{old('automakers', $vehicle->automakers)=="SINOTRUK"? 'selected':''}} value='SINOTRUK'>SINOTRUK</option>
                        <option {{old('automakers', $vehicle->automakers)=="SKODA"? 'selected':''}} value='SKODA'>SKODA</option>
                        <option {{old('automakers', $vehicle->automakers)=="SMART"? 'selected':''}} value='SMART'>SMART</option>
                        <option {{old('automakers', $vehicle->automakers)=="SPYKER"? 'selected':''}} value='SPYKER'>SPYKER</option>
                        <option {{old('automakers', $vehicle->automakers)=="SSANGYONG"? 'selected':''}} value='SSANGYONG'>SSANGYONG</option>
                        <option {{old('automakers', $vehicle->automakers)=="STANDARD"? 'selected':''}} value='STANDARD'>STANDARD</option>
                        <option {{old('automakers', $vehicle->automakers)=="STUDEBAKER"? 'selected':''}} value='STUDEBAKER'>STUDEBAKER</option>
                        <option {{old('automakers', $vehicle->automakers)=="SUBARU"? 'selected':''}} value='SUBARU'>SUBARU</option>
                        <option {{old('automakers', $vehicle->automakers)=="SUNDOWN"? 'selected':''}} value='SUNDOWN'>SUNDOWN</option>
                        <option {{old('automakers', $vehicle->automakers)=="SUZUKI"? 'selected':''}} value='SUZUKI'>SUZUKI</option>
                        <option {{old('automakers', $vehicle->automakers)=="SWELL MINI"? 'selected':''}} value='SWELL MINI'>SWELL MINI</option>
                        <option {{old('automakers', $vehicle->automakers)=="TAC"? 'selected':''}} value='TAC'>TAC</option>
                        <option {{old('automakers', $vehicle->automakers)=="TANGER"? 'selected':''}} value='TANGER'>TANGER</option>
                        <option {{old('automakers', $vehicle->automakers)=="TARGOS"? 'selected':''}} value='TARGOS'>TARGOS</option>
                        <option {{old('automakers', $vehicle->automakers)=="TATA"? 'selected':''}} value='TATA'>TATA</option>
                        <option {{old('automakers', $vehicle->automakers)=="TOYOTA"? 'selected':''}} value='TOYOTA'>TOYOTA</option>
                        <option {{old('automakers', $vehicle->automakers)=="TRAILER"? 'selected':''}} value='TRAILER'>TRAILER</option>
                        <option {{old('automakers', $vehicle->automakers)=="TRAXX"? 'selected':''}} value='TRAXX'>TRAXX</option>
                        <option {{old('automakers', $vehicle->automakers)=="TRICICLO"? 'selected':''}} value='TRICICLO'>TRICICLO</option>
                        <option {{old('automakers', $vehicle->automakers)=="TRICKER"? 'selected':''}} value='TRICKER'>TRICKER</option>
                        <option {{old('automakers', $vehicle->automakers)=="TRIUMPH"? 'selected':''}} value='TRIUMPH'>TRIUMPH</option>
                        <option {{old('automakers', $vehicle->automakers)=="TROLLER"? 'selected':''}} value='TROLLER'>TROLLER</option>
                        <option {{old('automakers', $vehicle->automakers)=="UNIMOG"? 'selected':''}} value='UNIMOG'>UNIMOG</option>
                        <option {{old('automakers', $vehicle->automakers)=="UTILITARIOS AGRICOLAS"? 'selected':''}} value='UTILITARIOS AGRICOLAS'>UTILITARIOS AGRICOLAS</option>
                        <option {{old('automakers', $vehicle->automakers)=="UTILITARIOS PESADOS"? 'selected':''}} value='UTILITARIOS PESADOS'>UTILITARIOS PESADOS</option>
                        <option {{old('automakers', $vehicle->automakers)=="VENTO"? 'selected':''}} value='VENTO'>VENTO</option>
                        <option {{old('automakers', $vehicle->automakers)=="VICTORY"? 'selected':''}} value='VICTORY'>VICTORY</option>
                        <option {{old('automakers', $vehicle->automakers)=="VOLKSWAGEN"? 'selected':''}} value='VOLKSWAGEN'>VOLKSWAGEN</option>
                        <option {{old('automakers', $vehicle->automakers)=="VOLVO"? 'selected':''}} value='VOLVO'>VOLVO</option>
                        <option {{old('automakers', $vehicle->automakers)=="WALK MACHINE"? 'selected':''}} value='WALK MACHINE'>WALK MACHINE</option>
                        <option {{old('automakers', $vehicle->automakers)=="WIESMANN"? 'selected':''}} value='WIESMANN'>WIESMANN</option>
                        <option {{old('automakers', $vehicle->automakers)=="WILLYS OVERLAND"? 'selected':''}} value='WILLYS OVERLAND'>WILLYS OVERLAND</option>
                        <option {{old('automakers', $vehicle->automakers)=="WOLVER"? 'selected':''}} value='WOLVER'>WOLVER</option>
                        <option {{old('automakers', $vehicle->automakers)=="WUYANG"? 'selected':''}} value='WUYANG'>WUYANG</option>
                        <option {{old('automakers', $vehicle->automakers)=="X MOTOS"? 'selected':''}} value='X MOTOS'>X MOTOS</option>
                        <option {{old('automakers', $vehicle->automakers)=="YAMAHA"? 'selected':''}} value='YAMAHA'>YAMAHA</option>
                        <option {{old('automakers', $vehicle->automakers)=="ZONGSHEN"? 'selected':''}} value='ZONGSHEN'>ZONGSHEN</option>
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
            window.location.href = "{{URL::previous()}}";
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