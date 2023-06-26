@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css\news.css') }}">
@section('content')
    <Section>
        <h2 class="text-center fs-2 p-3"><b>Новости и статьи</b></h2>
        @foreach ($news as $item)
            <div class="container">
                <hr>
                <div class="p-3">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-4">
                            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                                data-mdb-ripple-color="light">
                                <img src="{{ asset('images/' . $item->img) }}" class="img-fluid" width="60%"
                                    style="border-radius: 15px;" onclick="openFullscreenImage(event, this)">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">{{ $item->date }}</span>
                            <h4><strong class="fs-4">{{ $item->name }}</strong></h4>
                            <p class="text-muted fs-4">{{ $item->text }}</p>
                        </div>
                        @auth
                            <div class="w-100 text-center">
                                <a href="{{ route('news.delete',$item->id) }}" class="m-3 btn w-20 btn-danger">Удалить</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </Section>
    <script>
        function openFullscreenImage(event, image) {
            event.stopPropagation();

            var fullscreenImage = document.createElement('div');
            fullscreenImage.id = 'fullscreen-image';
            fullscreenImage.style.position = 'fixed';
            fullscreenImage.style.top = '0';
            fullscreenImage.style.left = '0';
            fullscreenImage.style.width = '100%';
            fullscreenImage.style.height = '100%';
            fullscreenImage.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
            fullscreenImage.style.display = 'flex';
            fullscreenImage.style.justifyContent = 'center';
            fullscreenImage.style.alignItems = 'center';
            fullscreenImage.style.zIndex = '9999';

            var img = document.createElement('img');
            img.src = image.src;
            img.style.maxWidth = '90%';
            img.style.maxHeight = '90%';

            var closeButton = document.createElement('span');
            closeButton.innerHTML = '&#10005;';
            closeButton.style.position = 'absolute';
            closeButton.style.top = '10px';
            closeButton.style.right = '10px';
            closeButton.style.color = '#fff';
            closeButton.style.fontSize = '24px';
            closeButton.style.cursor = 'pointer';

            fullscreenImage.appendChild(img);
            fullscreenImage.appendChild(closeButton);
            document.body.appendChild(fullscreenImage);

            closeButton.addEventListener('click', closeFullscreenImage);
            document.addEventListener('click', handleOutsideClick);
            document.addEventListener('keydown', handleKeyDown);
        }

        function closeFullscreenImage() {
            var fullscreenImage = document.getElementById('fullscreen-image');
            fullscreenImage.parentNode.removeChild(fullscreenImage);
            document.removeEventListener('click', handleOutsideClick);
            document.removeEventListener('keydown', handleKeyDown);
        }

        function handleOutsideClick(event) {
            if (event.target.id === 'fullscreen-image') {
                closeFullscreenImage();
            }
        }

        function handleKeyDown(event) {
            if (event.keyCode === 27) {
                closeFullscreenImage();
            }
        }
    </script>
@endsection
