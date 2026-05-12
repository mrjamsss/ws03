<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('top-banner') ?>

<section class="min-h-[60vh] flex flex-col justify-center items-center py-16 px-4" style="min-height: 60vh;">
    <div class="text-center max-w-2xl mx-auto">
        <h1 class="font-extrabold tracking-tight mb-4" style="font-size: 8rem; line-height: 1; color: var(--color-heading); text-shadow: 4px 4px 0px rgba(124, 58, 237, 0.1);">
            404
        </h1>
        <h2 class="text-3xl font-bold mb-6" style="color: var(--color-heading); line-height: normal; padding-bottom: 0.2em;">
            Page Not Found
        </h2>
        <p class="text-xl leading-relaxed mb-10 max-w-lg mx-auto" style="color: #334155; font-family: var(--font-body);">
            We couldn't find the page you're looking for. It might have been removed, or the link may be broken.
        </p>
        <div class="flex justify-center" style="margin-top: 3rem;">
            <a href="/" class="bg-yellow-500 hover:bg-yellow-600 font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; border-radius: 9999px; color: #ffffff; text-decoration: none;">
                <i class="fa fa-arrow-left"></i> Return Home
            </a>
        </div>
    </div>
</section>