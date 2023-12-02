<div class="row" style="min-height: inherit;">
    <div {{ $attributes->merge(['class' => 'col-none col-md-6']) }}>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center">
        <div class="auth__form-box">
            {{ $slot }}
        </div>
    </div>
</div>