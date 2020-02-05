<div class="content-page">

    <div class="content">
        <div class="container-fluid">
            @include('shared.page_title')
        </div>
        @yield('content')
    </div>

    <footer class="footer">
        <p>© @php echo date('Y') @endphp by Gudang Garam</p>
    </footer>
</div>
