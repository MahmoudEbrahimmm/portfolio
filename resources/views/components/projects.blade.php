<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 shadow-sm border-0">
        <!-- صورة المشروع -->
        <a href="project.html">
            <img class="card-img-top img-fluid rounded-top"
                 src="{{ asset('storage/' . $project->image) }}" 
                 alt="{{ $project->name }}">
        </a>

        <!-- محتوى الكارد -->
        <div class="card-body d-flex flex-column">
            <!-- اسم المشروع -->
            <h5 class="card-title mb-3 text-dark fw-bold">
                {{ $project->name }}
            </h5>

            <!-- وصف المشروع -->
            <p class="card-text text-muted mb-3" 
               style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                {{ $project->description }}
            </p>

            <!-- لينك المشروع -->
            <a href="{{ $project->link }}" target="_blank" 
               class="text-primary text-decoration-none mt-auto">
                {{ $project->link }}
            </a>
        </div>
    </div>
</div>
