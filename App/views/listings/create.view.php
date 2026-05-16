<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>

<!-- Post a Job Form Box -->
<section class="flex justify-center items-center mt-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>
        <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
        <div class="message bg-green-100 p-3 my-3">
          This is a success message.
        </div> -->
        <form method="POST" action="/listings">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>
            <?php loadPartial('errors', ['errors' => $errors ?? []]) ?>
            <div class="mb-4">
                <input
                    type="text"
                    name="title"
                    placeholder="Job Title"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['title'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <textarea
                    name="description"
                    placeholder="Job Description"
                    class="w-full px-4 py-2 border rounded focus:outline-none"><?= $listing['description'] ?? '' ?></textarea>
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="salary"
                    placeholder="Annual Salary"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['salary'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="requirements"
                    placeholder="Requirements"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['requirements'] ?? '' ?>">
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="benefits"
                    placeholder="Benefits"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['benefits'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="tags"
                    placeholder="Tags"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['tags'] ?? '' ?>" />
            </div>
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info & Location
            </h2>
            <div class="mb-4">
                <input
                    type="text"
                    name="company"
                    placeholder="Company Name"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['company'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="address"
                    placeholder="Address"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['address'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['city'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['state'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="phone"
                    placeholder="Phone"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['phone'] ?? '' ?>" />
            </div>
            <div class="mb-4">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address For Applications"
                    class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['email'] ?? '' ?>" />
            </div>
            <!-- Action Buttons -->
            <div style="display: flex; flex-direction: column; gap: 0.6rem; margin-top: 1.5rem;">
                <button
                    type="submit"
                    class="shimmer-btn"
                    style="width: 100%; display: block; text-align: center; padding: 0.75rem 1.5rem; font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; letter-spacing: 0.03em; cursor: pointer; border: none;">
                    Publish Listing
                </button>
                <a
                    href="/"
                    style="width: 100%; display: block; text-align: center; padding: 0.65rem 1rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.12); color: rgba(255,255,255,0.5); font-family: var(--font-body); font-size: 0.875rem; font-weight: 600; text-decoration: none; background: transparent; transition: border-color 0.25s ease, color 0.25s ease, background 0.25s ease;"
                    onmouseover="this.style.borderColor='rgba(255,255,255,0.3)'; this.style.color='#ffffff'; this.style.background='rgba(255,255,255,0.05)';"
                    onmouseout="this.style.borderColor='rgba(255,255,255,0.12)'; this.style.color='rgba(255,255,255,0.5)'; this.style.background='transparent';">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</section>
<?php loadPartial('bottom-banner') ?>
<?php loadPartial('footer') ?>