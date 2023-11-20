<div class="accordion-item">
    <h2 class="accordion-header" id="{{ $id }}">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}Collapse" aria-expanded="false" aria-controls="collapseTwo">
        {{ $question }}
      </button>
    </h2>
    <div id="{{ $id }}Collapse" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        {{ $slot }}
      </div>
    </div>
  </div>