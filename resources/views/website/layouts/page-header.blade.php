    <header class="page-header">
        <div class="container">
            <h1 class="page-title">{{ $pageTitle }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ $homePage }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $currentPage }}</li>
                </ol>
            </nav>
        </div>
    </header>
