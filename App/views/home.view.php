<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('showcase-search'); ?>
<?php loadPartial('top-banner'); ?>

<!-- Job Listings -->
<section class="relative overflow-hidden py-8">
    <div id="aurora-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>

    <div class="container mx-auto p-4 relative z-10">
        <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3 bg-white/80 backdrop-blur-sm rounded">Recent Jobs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <?php foreach ($listings as $listing): ?>
                <!-- Job Listing 1: Software Engineer -->
                <div class="rounded-lg shadow-md bg-white">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
                        <p class="text-gray-700 text-lg mt-2">
                            <?= $listing->description ?>
                        </p>
                        <ul class="my-4 bg-gray-100 p-4 rounded">
                            <li class="mb-2"><strong>Salary:</strong><?= formatSalary($listing->salary) ?></li>
                            <li class="mb-2">
                                <strong>Location:</strong><?= $listing->city ?>, <?= $listing->state ?>
                                <span
                                    class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
                            </li>
                            <?php if (!empty($listing->tags)): ?>
                                <li class="mb-2">
                                    <strong>Tags:</strong> <?= $listing->tags ?>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <a href="/listings/<?= $listing->id ?>"
                            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                            Details
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="listings" class="btn-primary-action block text-xl text-center px-8 py-4 rounded shadow-md relative z-10">
            <i class="fa fa-arrow-alt-circle-right mr-2"></i>
            Show All Jobs
        </a>
    </div>
</section>

<script type="module">
    import {
        Aurora
    } from '/js/aurora.js';

    document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('aurora-bg');
        if (container) {
            new Aurora(container, {
                // Ocean Depth / Violet / Blue theme colors matching your site
                colorStops: ['#1e3a8a', '#90D5FF', '#3b82f6'],
                amplitude: 1.2,
                blend: 0.5,
                speed: 0.5
            });
        }
    });
</script>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>