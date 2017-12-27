<hr class="my-4">
<p class="lead">
    <div class="card image_display_r border border-secondary rounded shadow_only">
      <div class="card-body">
        <p class="lead"><strong>Dashboard Services:</strong></p>
        <hr class="my-4">
        @if (Request::route()->getName() != 'dashboard')
           <a href="/jobs/create" class="alert alert-primary btn btn-secondary" role="button">Return to Dashboard</a>
        @endif

          <a href="/jobs/create" class="alert alert-primary btn btn-secondary" role="button">Create Job</a>
          <a href="/quotes" class="alert alert-primary btn btn-secondary" role="button">Create Quote</a>
          <a href="/address" class="alert alert-primary btn btn-secondary" role="button">Manage Addresses</a>
          <a href="/items" class="alert alert-primary btn btn-secondary" role="button">Manage Items</a>
          <a href="/forms" class="alert alert-primary btn btn-secondary" role="button">Manage Proposals</a>
      </div>
    </div>
</p>
