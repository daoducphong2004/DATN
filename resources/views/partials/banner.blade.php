<a href="">
    <div class="index-background d-none d-lg-block"
        style="background-image: url('{{ Storage::url(!empty($pc_banner->image_path) ? $pc_banner->image_path : '') }}')"></div>
    <div class="index-background d-lg-none"
        style="background-image: url('{{ Storage::url(!empty($mobile_banner->image_path) ? $mobile_banner->image_path : '') }}'); background-size: cover">
    </div>
</a>
