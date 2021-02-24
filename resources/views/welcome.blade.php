<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project MTK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="card text-center">Statistika</h1>
        <div  class="col-md-auto">
          <div class="col-sm-120 col-md-60">
            <div class="card">
              <div class="card-header">
                <h4>Mean</h4>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <div style="flex: 1" class="form-group m-1">
                    <i><label>masukan angka</label></i>
                    <input type="number" class="form-control" id="mean" onkeyup="mean()">
                    <input style="background-color:lightblue;" type="submit" class="form-control" id="" onkeyup="">
                    <input type="reset" name="reset" value="Clear" class="form-control">
                  </div>
                </div>
                <div id="hasil"></div>
                <div></div>
              </div>
              <div class="container mt-5">
            <div  class="col-md-auto">
              <div class="col-sm-120 col-md-60">
                <div class="card">
                  <div class="card-header">
                    <h4>Median</h4>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div style="flex: 1" class="form-group m-1">
                        <i><label>masukan angka</label></i>
                        <input type="number" class="form-control" id="mean" onkeyup="mean()">
                        <input style="background-color:lightblue;" type="submit" class="form-control" id="" onkeyup="">
                        <input type="reset" name="reset" value="Clear" class="form-control">
                      </div>
                    </div>
                    <div id="hasil"></div>
                    <div></div>
                  </div>
                  <div class="container mt-5">
                <div  class="col-md-auto">
                  <div class="col-sm-120 col-md-60">
                    <div class="card">
                      <div class="card-header">
                        <h4>Modus</h4>
                      </div>
                      <div class="card-body">
                        <div class="d-flex">
                          <div style="flex: 1" class="form-group m-1">
                            <i><label>masukan angka</label></i>
                            <input type="number" class="form-control" id="mean" onkeyup="mean()">
                            <input style="background-color:lightblue;" type="submit" class="form-control" id="" onkeyup="">
                            <input type="reset" name="reset" value="Clear" class="form-control">
                          </div>
                        </div>
                        <div id="hasil"></div>
                        <div></div>
                      </div>
                    <div class="container mt-5">
                  <div  class="col-md-auto">
                    <div class="col-sm-120 col-md-60">
                      <div class="card">
                        <div class="card-header">
                          <h4>Grafik</h4>
                        </div>
                        <div class="card-body">
                          <div class="d-flex">
                            <div style="flex: 1" class="form-group m-1">
                              <i><label>batang</label></i> <br>
                              <i><label>lingkaran</label></i>
                            </div>
                          </div>
                          <div id="hasil"></div>
                          <div></div>
                        </div>
                     <div class="card-footer">
                      <small class="text-muted">Mean => Nilai Rata - Rata,</small>
                      <small class="text-muted">Median => Nilai Tengah,</small>
                      <small class="text-muted">Modus => Nilai yang paling banyak.</small>
                    </div>
                  </div>
                </div>
              </div>




      <script>
        function statistik($array, $output = 'mean'){
 
 if(!is_array($array)){ 
     return FALSE;    
}else{
 
     switch($output){ 
         case 
         case 'mean':                 
             $count = count($array);                 
             $sum = array_sum($array);               
             $total = $sum / $count; 
         break; 
         case 
         break; 
         case 'median':                 
             rsort($array);                
             $middle = round(count($array) / 2);                 
             $total = $array[$middle-1]; 
         break; 
         case 
         break; 
         case 'modus':               
             $v = array_count_values($array);                 
             arsort($v); 
             foreach(
             foreach($v as $k => $v){$total = $k; break;} 
         break; 
         case 
         break; 
         case 'range':                 
             sort($array);                 
             $sml = $array[0];                
             rsort($array);                 
             $lrg = $array[0]; 
              $total = $lrg - $sml; 
         break; 
     } 
     return 
         break; 
     } 
     return $total; 
 } 
} 
 } 
} 
//misal kita punya array
$data = array(1,5,7,8,33,23,4,20,120,4,2,2,9,4,9); 
//hitung mean
echo " Mean dari data : ". statistik($data,'mean');
//hitung media
echo " Median dari data : ". statistik($data,'median');
//hitung modus
echo " Modus dari data : ". statistik($data,'modus');
//hitung range
echo " Range dari data : ". statistik($data,'range');

      </script>
    </body>
    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
