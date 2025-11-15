@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Gallery</h1>

        @if((empty($images) || count($images) === 0) && (empty($videos) || count($videos) === 0))
            <p class="text-gray-600">No media found in the gallery.</p>
        @endif

        {{-- Videos (highlighted top section) --}}
        @if(!empty($videos) && count($videos) > 0)
            <div class="mb-8">
                <div class="space-y-6">
                        @foreach($videos as $video)
                            <div class="mb-4">
                                <div class="bg-gradient-to-r from-orange-50 to-white border-l-4 border-orange-500 rounded shadow overflow-hidden w-full max-w-md">
                                    <button class="w-full open-media text-left" data-type="video" data-src="{{ $video['url'] }}" data-poster="{{ $video['poster'] ?? '' }}" aria-label="Play video">
                                        <div class="relative h-60 md:h-68 bg-gray-900 flex items-center justify-center bg-center bg-cover">
                                            @if(!empty($video['poster']))
                                                <span style="background-image: url('{{ $video['poster'] }}');" class="absolute inset-0 bg-center bg-cover" aria-hidden="true"></span>
                                            @endif
                                            <div class="relative z-10 flex items-center justify-center">
                                                <svg class="w-16 h-16 text-white opacity-95" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6V4z"/></svg>
                                            </div>
                                            <span class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded">Video</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        @endif

        {{-- Images grid --}}
        @if(!empty($images) && count($images) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($images as $file)
                    <div class="bg-white rounded shadow overflow-hidden">
                        <button class="w-full h-full focus:outline-none open-media" data-type="image" data-src="{{ $file['url'] }}" aria-label="Open image">
                            <img src="{{ $file['url'] }}" alt="{{ $file['name'] }}" class="w-full h-48 object-cover transform hover:scale-105 transition-transform duration-300">
                        </button>
                        <div class="p-3 text-sm text-gray-700 truncate">{{ $file['name'] }}</div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Modal -->
        <div id="media-modal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
            <div class="max-w-4xl w-full mx-4">
                <div class="bg-white rounded overflow-hidden relative">
                    <button id="modal-close" class="absolute top-3 right-3 z-50 text-gray-700 bg-white rounded-full p-2 hover:bg-gray-100">✕</button>
                    <div id="modal-content" class="w-full bg-black flex items-center justify-center" style="min-height:320px;"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openMedia(type, src, poster) {
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
                video.playsInline = true;
                // constrain modal video width to max-w-md for a smaller player
                video.className = 'w-full h-auto max-h-[75vh] bg-black';

                // set poster if provided, otherwise use a simple black SVG poster
                if (poster && poster.length > 0) {
                    try { video.setAttribute('poster', poster); } catch (e) {}
                } else {
                    const svg = '<svg xmlns="http://www.w3.org/2000/svg" width="1280" height="720"><rect width="100%" height="100%" fill="#000"/><polygon points="520,360 820,260 820,460" fill="#fff"/></svg>';
                    const data = 'data:image/svg+xml;utf8,' + encodeURIComponent(svg);
                    try { video.setAttribute('poster', data); } catch (e) {}
                }

                container.appendChild(video);
            }

            const modal = document.getElementById('media-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeMedia() {
            const modal = document.getElementById('media-modal');
            const container = document.getElementById('modal-content');
            // If there's a video playing, pause and remove source to stop playback
            const vid = container.querySelector('video');
            if (vid) {
                try {
                    vid.pause();
                    vid.removeAttribute('src');
                    vid.load();
                } catch (e) {
                    // ignore
                }
            }
            container.innerHTML = '';
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Delegate click handlers to handle dynamic content reliably
        document.addEventListener('click', function (e) {
            const open = e.target.closest('.open-media');
            if (open) {
                const type = open.getAttribute('data-type');
                const src = open.getAttribute('data-src');
                const poster = open.getAttribute('data-poster');
                openMedia(type, src, poster);
                return;
            }

            // close button may contain nested elements (svg/text); use closest()
            if (e.target.closest('#modal-close')) {
                closeMedia();
                return;
            }
        });

        // Close modal on outside click
        document.getElementById('media-modal').addEventListener('click', (e) => {
            if (e.target.id === 'media-modal') {
                closeMedia();
            }
        });
        const modalCloseBtn = document.getElementById('modal-close');
        if (modalCloseBtn) {
            modalCloseBtn.addEventListener('click', (ev) => {
                ev.preventDefault();
                ev.stopPropagation();
                closeMedia();
            });
        }
    </script>
@endsection
