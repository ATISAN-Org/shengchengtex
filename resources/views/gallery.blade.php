@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Gallery</h1>

        @if(empty($files))
            <p class="text-gray-600">No media found in the gallery.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($files as $file)
                    <div class="bg-white rounded shadow overflow-hidden">
                        @if($file['type'] === 'image')
                            <button class="w-full h-full focus:outline-none open-media" data-type="image" data-src="{{ $file['url'] }}" aria-label="Open image">
                                <img src="{{ $file['url'] }}" alt="{{ $file['name'] }}" class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                            </button>
                        @else
                            <button class="w-full h-full focus:outline-none open-media" data-type="video" data-src="{{ $file['url'] }}" aria-label="Open video">
                                <div class="relative h-48 bg-gray-900 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white opacity-90" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6V4z"/></svg>
                                </div>
                            </button>
                        @endif
                        <div class="p-3 text-sm text-gray-700 truncate">{{ $file['name'] }}</div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Modal -->
        <div id="media-modal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
            <div class="max-w-4xl w-full mx-4">
                <div class="bg-white rounded overflow-hidden relative">
                    <button id="modal-close" class="absolute top-3 right-3 text-gray-700 bg-white rounded-full p-2 hover:bg-gray-100">✕</button>
                    <div id="modal-content" class="w-full bg-black flex items-center justify-center" style="min-height:320px;"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.open-media').forEach(btn => {
            btn.addEventListener('click', () => {
                const type = btn.getAttribute('data-type');
                const src = btn.getAttribute('data-src');
                const container = document.getElementById('modal-content');
                container.innerHTML = '';

                if (type === 'image') {
                    const img = document.createElement('img');
                    img.src = src;
                    img.className = 'w-full h-auto max-h-[75vh] object-contain bg-black';
                    container.appendChild(img);
                } else {
                    const video = document.createElement('video');
                    video.src = src;
                    video.controls = true;
                    video.autoplay = true;
                    video.className = 'w-full h-auto max-h-[75vh] bg-black';
                    container.appendChild(video);
                }

                document.getElementById('media-modal').classList.remove('hidden');
                document.getElementById('media-modal').classList.add('flex');
            });
        });

        document.getElementById('modal-close').addEventListener('click', () => {
            const modal = document.getElementById('media-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.getElementById('modal-content').innerHTML = '';
        });

        // Close modal on outside click
        document.getElementById('media-modal').addEventListener('click', (e) => {
            if (e.target.id === 'media-modal') {
                document.getElementById('modal-close').click();
            }
        });
    </script>
@endsection
