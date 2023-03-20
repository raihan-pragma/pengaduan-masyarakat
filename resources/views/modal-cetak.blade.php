<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Generate Laporan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mx-auto">
                <div class="col-lg">
                    {{-- <form action="/laporan" role="form" method="GET"> --}}
                         <div class="row">
                             <div class="col-md-12" mt-3>
                                <label for="">Tanggal Awal</label>
                                <input type="date" id="tglAwal" name="tglAwal"
                                class="form-control" value="{{ date('Y-m-d',mktime(0,0,0, date('m'),1,date('Y'))) }}"
                                autocomplete="off">
                             </div>
                             <div class="col-md-12" mt-3>
                                <label for="">Tanggal Akhir</label>
                                <input type="date" id="tglAkhir" name="tglAkhir"
                                class="form-control" value="{{ date('Y-m-d') }}"
                                autocomplete="off">
                             </div>
                         </div>
                         <div class="col-12 mt-4">
                            <div class="d-grid gap-2">
                              <a href="" onclick="this.href='/laporan/'+document.getElementById('tglAwal').value+'/'+document.
                              getElementById('tglAkhir').value" type="submit" class="btn btn-primary" target="_blank">Save</a>
                                {{-- <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button> --}}
                            </div>
                         </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
      </div>
    </div>
</div>