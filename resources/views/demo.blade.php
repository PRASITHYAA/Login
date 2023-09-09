<form action="{{ route('career.job_application.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

@php
    $sectors = \App\Models\Sector::with('positions')->get();
@endphp

<div class="container-fluid">
    @foreach ($sectors as $sector)
    <div class="row">
        <div class="col-lg-6">
            <!-- Sector -->
            <label>Sector <span class="red"> *</span></label>
            <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control bg" type="text"
                id="sector" value="{{ $sector->id }}" {{ ($position->sector_id==$sector->id)?'selected':''  }}>{{ $sector->name }} readonly>
        </div>
    </div>

    @foreach ($sector->positions as $position)
    <div class="row">
        <!-- Position -->
        <div class="col-lg-6">
            <label>Position Applied For<span class="red"> *</span></label>
            <input style="background-color: rgba(248, 235, 235, 0.726);" class="form-control bg" type="text"
                id="position"value="{{ $position->id }}" {{ (old('position')==$position->id)?'selected':''  }}>{{ $position->name }} readonly>
        </div>

    </div>
    @endforeach
    @endforeach
</div>
