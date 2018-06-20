        <!--/.row-->
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>

  </div>
  <footer class="app-footer">
    <span><a href="/">Veg'n'Bio</a> © {{ date("Y") }}.</span>
    <span class="ml-auto">Powered by <a href="https://esgi.fr">ESGI</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  {!! Html::script('vendor/js/jquery.min.js') !!}
  {!! Html::script('vendor/js/popper.min.js') !!}
  {!! Html::script('vendor/js/bootstrap.min.js') !!}
  {!! Html::script('vendor/js/pace.min.js') !!}
  {!! Html::script('vendor/DataTables/datatables.min.js') !!}
  {{-- {!! Html::script('vendor/js/Chart.min.js') !!} --}}
  {!! Html::script('js/back/app.js') !!}
  {!! Html::script('vendor/js/toastr.min.js') !!}
  {!! Html::script('vendor/js/gauge.min.js') !!}
  {!! Html::script('vendor/js/moment.min.js') !!}
  {!! Html::script('vendor/js/daterangepicker.min.js') !!}
  {!! Html::script('js/back/views/main.js') !!}
  {!! Html::script('ajax/admin.js') !!}
  {!! Html::script('ajax/datatables.js') !!}

  </body>
</html>
