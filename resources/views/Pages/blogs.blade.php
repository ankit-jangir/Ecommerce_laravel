@extends('layouts.app')

@section('title', 'Blogs - AURA KURTIS')

@section('content')

    @php
        $blogs = [
            [
                'id' => 1,
                'slug' => 'everyday-kurti-styling-for-office',
                'title' => 'Everyday Kurti Styling for Office',
                'category' => 'styling-guides',
                'badge' => 'Styling',
                'image' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=800',
                'date' => '12 Jan 2026',
                'read' => '5 min read',
                'tags' => ['Kurti', 'Office', 'Fashion'],
            ],
            [
                'id' => 2,
                'slug' => 'festive-kurti-looks-for-evening-parties',
                'title' => 'Festive Kurti Looks for Evening Parties',
                'category' => 'festive-wear',
                'badge' => 'Festive',
                'image' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=800',
                'date' => '15 Jan 2026',
                'read' => '6 min read',
                'tags' => ['Festive', 'Ethnic'],
            ],
            [
                'id' => 3,
                'slug' => 'top-kurti-trends-this-season',
                'title' => 'Top Kurti Trends This Season',
                'category' => 'trends',
                'badge' => 'Trends',
                'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=800',
                'date' => '18 Jan 2026',
                'read' => '4 min read',
                'tags' => ['Trends', 'Kurti'],
            ],
            [
                'id' => 4,
                'slug' => 'how-to-pair-kurtis-with-dupattas',
                'title' => 'How to Pair Kurtis with Dupattas',
                'category' => 'fashion-tips',
                'badge' => 'Tips',
                'image' => 'https://images.unsplash.com/photo-1520975916090-3105956dac38?w=800',
                'date' => '20 Jan 2026',
                'read' => '3 min read',
                'tags' => ['Tips', 'Dupatta'],
            ],
            [
                'id' => 5,
                'slug' => 'minimal-kurti-looks-for-daily-wear',
                'title' => 'Minimal Kurti Looks for Daily Wear',
                'category' => 'styling-guides',
                'badge' => 'Daily',
                'image' => 'https://images.unsplash.com/photo-1541099649105-f69ad21f3246?w=800',
                'date' => '22 Jan 2026',
                'read' => '5 min read',
                'tags' => ['Daily', 'Comfort'],
            ],
            [
                'id' => 6,
                'slug' => 'wedding-ready-kurti-styles',
                'title' => 'Wedding Ready Kurti Styles',
                'category' => 'festive-wear',
                'badge' => 'Wedding',
                'image' => 'https://images.unsplash.com/photo-1503342394128-c104d54dba01?w=800',
                'date' => '25 Jan 2026',
                'read' => '7 min read',
                'tags' => ['Wedding'],
            ],
            [
                'id' => 7,
                'slug' => 'summer-cotton-kurtis',
                'title' => 'Summer Cotton Kurtis You’ll Love',
                'category' => 'trends',
                'badge' => 'Summer',
                'image' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?w=800',
                'date' => '28 Jan 2026',
                'read' => '4 min read',
                'tags' => ['Summer', 'Cotton'],
            ],
            [
                'id' => 8,
                'slug' => 'office-wear-kurti-colors',
                'title' => 'Best Kurti Colors for Office Wear',
                'category' => 'fashion-tips',
                'badge' => 'Office',
                'image' => 'https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?w=800',
                'date' => '30 Jan 2026',
                'read' => '4 min read',
                'tags' => ['Office', 'Colors'],
            ],
            [
                'id' => 9,
                'slug' => 'ethnic-kurti-styling',
                'title' => 'Ethnic Kurti Styling Guide',
                'category' => 'styling-guides',
                'badge' => 'Ethnic',
                'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=800',
                'date' => '2 Feb 2026',
                'read' => '6 min read',
                'tags' => ['Ethnic'],
            ],
        ];
        $page = request()->get('page', 1);

        // Page 1 = 6 items, Page 2+ = 3 items
        $perPage = $page == 1 ? 6 : 3;

        $offset = $page == 1 ? 0 : 6 + ($page - 2) * 3;

        $paginatedBlogs = collect($blogs)->slice($offset, $perPage);

        $totalPages = ceil((count($blogs) - 6) / 3) + 1;
    @endphp

    <!-- HERO -->
    <section class="bg-gradient-to-b from-[#FFF3E8] to-white pt-20 pb-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-[#5A3A1A]">
                Aura Fashion Journal
            </h1>
            <p class="mt-5 text-gray-600 max-w-2xl mx-auto text-lg">
                Discover styling secrets, festive trends & timeless kurti inspiration curated for modern Indian women.
            </p>
        </div>
    </section>

    <!-- FILTER TABS -->
    <section class="sticky top-20 bg-white border-b py-4 z-30">
    <div class="flex flex-wrap justify-center gap-3 max-w-3xl mx-auto">
        @foreach(['all','fashion-tips','styling-guides','trends','festive-wear'] as $cat)
            <button data-filter="{{ $cat }}"
                class="tab-btn px-5 py-2 rounded-full border text-sm font-semibold
                {{ $cat=='all'?'bg-[#8B4513] text-white':'text-[#8B4513]' }}">
                {{ ucwords(str_replace('-',' ',$cat)) }}
            </button>
        @endforeach
    </div>
</section>

    <!-- BLOG GRID -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach ($blogs as $blog)
                <article data-category="{{ $blog['category'] }}"
                    class="blog-card bg-white rounded-3xl overflow-hidden shadow-md hover:-translate-y-1 hover:shadow-xl transition group">

                    <div class="relative overflow-hidden">
                        <img src="{{ $blog['image'] }}"
                            class="w-full h-60 object-cover transition duration-700 group-hover:scale-110">

                        <span
                            class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-xs font-semibold text-[#8B4513]">
                            {{ $blog['badge'] }}
                        </span>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between text-xs text-gray-500 mb-2">
                            <span>{{ $blog['date'] }}</span>
                            <span>{{ $blog['read'] }}</span>
                        </div>

                        <h3 class="text-xl font-serif font-bold text-[#5A3A1A] leading-snug">
                            {{ $blog['title'] }}
                        </h3>

                        <p class="text-sm text-gray-600 mt-3 line-clamp-3">
                            Discover elegant kurti styling ideas curated for modern Indian women.
                        </p>

                        <div class="flex flex-wrap gap-2 mt-4">
                            @foreach ($blog['tags'] as $tag)
                                <span class="px-3 py-1 bg-[#FFF1E6] text-xs rounded-full text-[#8B4513]">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>

                        <a href="{{ route('blog.detail', $blog['slug']) }}"
                            class="inline-flex items-center gap-2 mt-5 font-semibold text-[#8B4513]">
                            Read Article
                            <span class="transition group-hover:translate-x-1">→</span>
                        </a>

                    </div>
                </article>
            @endforeach

        </div>
        <!-- PAGINATION -->
        <div class="flex justify-center items-center gap-2 mt-14">

            @if ($page > 1)
                <a href="?page={{ $page - 1 }}" class="px-4 py-2 border rounded">← Prev</a>
            @endif

            @for ($p = 1; $p <= $totalPages; $p++)
                <a href="?page={{ $p }}"
                    class="px-4 py-2 rounded border
{{ $p == $page ? 'bg-[#8B4513] text-white' : '' }}">
                    {{ $p }}
                </a>
            @endfor

            @if ($page < $totalPages)
                <a href="?page={{ $page + 1 }}" class="px-4 py-2 border rounded">Next →</a>
            @endif

        </div>
    </section>

@endsection

<!-- FILTER JS -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const tabs = document.querySelectorAll(".tab-btn");
        const cards = document.querySelectorAll(".blog-card");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {

                tabs.forEach(t => {
                    t.classList.remove("bg-[#8B4513]", "text-white", "shadow",
                        "active");
                    t.classList.add("bg-white", "text-[#8B4513]", "border",
                        "border-[#8B4513]");
                });

                tab.classList.add("bg-[#8B4513]", "text-white", "shadow", "active");
                tab.classList.remove("bg-white", "text-[#8B4513]", "border");

                const filter = tab.dataset.filter;

                cards.forEach(card => {
                    if (filter === "all" || card.dataset.category === filter) {
                        card.classList.remove("hidden");
                    } else {
                        card.classList.add("hidden");
                    }
                });
            });
        });
    });
</script>
