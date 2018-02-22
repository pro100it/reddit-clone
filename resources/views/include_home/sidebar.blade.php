<div class="page-sidebar-wrapper">
    <div class="collapse navbar-collapse">
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="start">
                <a href="{{ route('create_post_path') }}">
    		<i class="icon-home"></i>
                    <span class="title">Добавить новость</span>
		</a>
		</li>
                <li class="separator hide">
		</li>
                <li>
                    <a href="{{ url('/posts') }}">
                    <i class="icon-home"></i>
                    <span class="title">Список новостей</span>
		</a>
                </li>
                <li>
                    <a href="{{ route('create_transport_path') }}">
                    <i class="icon-home"></i>
                    <span class="title">Добавить транспорт</span>
		</a>
                </li>
                 <li>
                    <a href="{{ url('/transports') }}">
                    <i class="icon-home"></i>
                    <span class="title">Список транспорта</span>
		</a>
                </li>
        </ul>
    </div>
</div>