<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"  href="javascript:window.livewire.emit('homeNavChangePage', 'task_index')">Task</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"  href="javascript:window.livewire.emit('homeNavChangePage', 'category_index')">Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        @if($shownPage == 'task_index')
            @livewire('home.task.index')
        @elseif($shownPage == 'category_index')
            @livewire('home.category.index')
        @elseif($shownPage == 'task_create')
            @livewire('home.category.index')
        @elseif($shownPage == 'category_create')
            @livewire('home.category.create', ['category_id' => $category_id])
        @endif
    </div>
</div>
