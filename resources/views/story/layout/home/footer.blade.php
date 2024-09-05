<script>
    $(document).ready(function() {

        $(".mobile-toggle header").click(function() {
            $(this).parent().find(".listall_summary").toggle();
            $(this).parent().find(".sect-body").toggle();
        });

        //listab(".daily-recent_views");

    });
</script>
<script>
       // Toggle lớp "none" khi bấm vào nút mục lục
       document.querySelector('.catalog-icon').addEventListener('click', function() {
        var listVolSection = document.getElementById('list-vol');
        listVolSection.classList.toggle('none');
    });

    // Cuộn màn hình đến tập truyện khi bấm vào mục lục
    document.querySelectorAll('.list-volume li').forEach(function(item) {
        item.addEventListener('click', function() {
            var targetId = this.getAttribute('data-scrollTo');
            var targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
 // Ẩn mục lục khi bấm vào nút "list-vol_off"
    document.querySelector('.list-vol_off').addEventListener('click', function() {
        var listVolSection = document.getElementById('list-vol');
        listVolSection.classList.add('none');
    });

    // Ẩn mục lục khi bấm ra ngoài mục lục
    document.addEventListener('click', function(event) {
        var listVolSection = document.getElementById('list-vol');
        var isClickInside = listVolSection.contains(event.target) || document.querySelector('.catalog-icon').contains(event.target);
        if (!isClickInside) {
            listVolSection.classList.add('none');
        }
    });
</script>

</main>

<script src="{{ asset('js/app.js?id=b8198cd1707d7a5e169b')}}"></script>
{{-- <script src="{{ asset('js/livewire.js?id=f121a5df')}}"   data-csrf="{{ @csrf }}" data-update-uri="/livewire/update" data-navigate-once="true"></script> --}}


{{-- <script async type='text/javascript' src='//pl16314303.highcpmgate.com/d5/6b/4b/d56b4bd6c3d2c1e161c4ab3c78c27670.js'></script> --}}


        <footer id="footer">
<div class="container">
    <!--<span><a href="">Hako.re</a></span>-->
    <span class="right">Liên hệ: <a href="mailto:daoducphong2004@gmail.com" target="_blank" style="color: #5fff46">daoducphong2004@gmail.com</a></span>

    <span>© 2016 - 2024 Cổng Light Novel - Đọc Light Novel</span>
</div>
</footer>
<div x-data x-show="$store.toast.on" @click="$store.toast.hide()" class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md fixed w-3/4 md:w-1/2 z-20 inset-x-0 bottom-10 mx-auto" role="alert" style="display: none">
<div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
    <div>
        <p class="font-bold capitalize">Chú ý</p>
        <p class="text-sm" x-text="$store.toast.message"></p>
    </div>
</div>
</div></body>
</html>
