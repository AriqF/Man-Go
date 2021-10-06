@include('layouts.admin.partials.top_menu')
@include('layouts.admin.partials.side_menu')

<div class="page-content">
 <!-- /.ace-settings-container -->
@yield('content')

<!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
@include('layouts.admin.partials.footer')