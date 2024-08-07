
        {{-- Sidebar --}}
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Project Management</span>
                </a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Home
					</li>

					<li class="sidebar-item @if (Request::is('/')) active @endif">
						<a class="sidebar-link" href="/">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Projects
					</li>

					<li class="sidebar-item @if (Request::is('projects')) active @endif">
						<a class="sidebar-link" href="/projects">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">All Project</span>
                        </a>
					</li>
					<li class="sidebar-item @if (Request::is('active-project')) active @endif ">
						<a class="sidebar-link" href="/active-project">
                            <i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle">Active Project</span>
                        </a>
					</li>
					<li class="sidebar-item @if (Request::is('new-project')) active @endif ">
						<a class="sidebar-link" href="/new-project">
                            <i class="align-middle" data-feather="plus-circle"></i> <span class="align-middle">Add New Project</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Accounts
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/login">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
                        </a>
					</li>
			</div>
		</nav>
