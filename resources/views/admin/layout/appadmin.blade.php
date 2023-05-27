@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
    
                <main>
                    <div class="container-fluid px-4">
                @yield('content') 
                <!---  yield ini adalah mendeklarasian yang akan diisi konten ketika yieldnya dipanggil
                        didalam konten masing-masing, contoh yield yang diatas menggunakan value content-->
                    </div>
                </main>
</div>
@include('admin.layout.bottom')