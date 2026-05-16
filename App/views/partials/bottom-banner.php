<?php

use Framework\Session;

?>

<!-- Bottom Banner -->
<section class="container mx-auto my-6">
    <div
        class="bg-blue-800 text-white rounded p-4 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-semibold">Looking to hire?</h2>
            <p class="text-gray-200 text-lg mt-2">
                Post your job listing now and find the perfect candidate.
            </p>
        </div>
        <?php if (Session::has('user')) : ?>
            <a href="/listings/create" class="shimmer-btn" style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.5rem 1rem; font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; letter-spacing: 0.03em; cursor: pointer; border: none; text-decoration: none;"><i class="fa fa-edit"></i> Post a Job</a>
        <?php endif; ?>
    </div>
</section>