<div class="col-lg-4 mb-4">
    <div class="text-container p-3 border rounded shadow-sm">
        <div class="image-container mb-3">
            <a href="project.html">
                <img class="img-fluid rounded" src="{{ asset('storage/' . $project->image) }}" alt="alternative">
            </a>
        </div>
        <h4 class="mb-2">{{ $project->name }}</h4>
        <p class="description text-truncate" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
            {{ $project->description }}
        </p>
        <p class="text-primary">
            <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
        </p>
    </div>
</div>
