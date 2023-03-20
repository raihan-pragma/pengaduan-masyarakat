<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>     
            <table class="table table-striped container">
                <thead>
                  <th scope="col" class="text-center">#</th>
                  <th scope="col" class="text-center">Pelapor</th>
                  <th scope="col" class="text-center">Pengaduan</th>
                  <th scope="col" class="text-center">Temapat Kejadian</th>
                  <th scope="col" class="text-center">Status</th>
                  <th scope="col" class="text-center">Tanggapan</th>
                  <th scope="col" class="text-center">Foto Kejadian</th>
                </thead>   
                <tbody>
                  {{-- @if ($pengaduan2->count() > 0) --}}
                  @foreach ($dtPengaduan as $item)
                  @if ($item->tanggapan)
                  <tr>
                    <td class="text-center">{{ $item->created_at }}</td>
                    <td class="text-center">{{ $item->user->name }}</td>
                    <td class="text-center">{{ $item->isi }}</td>
                    <td class="text-center">{{ $item->lokasi }}</td>
                    <td class="text-center">
                      {{ $item->status }}
                    </td>
                    <td class="text-center">{{ $item->tanggapan}}</td>
                    <td class="text-center"><img src="{{ asset('/storage/' . $item->lampiran)}} " width="100px"></td>
                    @endif
                  @endforeach
                  </tr> 
                </tbody>
              </table> 
    </section>  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </div>
  <script type="text/javascript">
    window.print();
  </script>
</body>
</html>
