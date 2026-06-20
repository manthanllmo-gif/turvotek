<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="container section">
    <div class="page-banner">
        <div class="page-banner-overlay"></div>
        <div class="page-banner-content">
            <h1 class="page-title">Contact Our Team</h1>
            <p class="shop-subtitle">
                <span class="shop-slogan-label">Get in Touch:</span>
                <span class="shop-rotating-mission rotating-text" data-images='[]' data-words='["Inquire about custom structures & bulk pricing", "Support Sales: +91 96650 56795", "Registered office at Bawadiya Kalan, Bhopal", "Send a message or visit our project office"]'>Inquire about custom structures & bulk pricing</span>
            </p>
        </div>
    </div>

    <div style="display: flex; gap: 50px; flex-wrap: wrap; margin-bottom: 60px;">
        <!-- Contact details column -->
        <div style="flex: 1; min-width: 300px;">
            <h2 style="font-size: 28px; margin-bottom: var(--spacing-lg);">Get in Touch</h2>
            <p style="font-size: 16px; line-height: 1.6; color: var(--graphite); margin-bottom: var(--spacing-xl);">
                Have inquiries about custom structural specifications, wholesale B2B pricing, or bulk switchgear orders? Write to us or call our project office.
            </p>
            
            <div style="background-color: var(--cloud); padding: 30px; border-radius: var(--rounded-xl); border: 1px solid var(--hairline);">
                <ul class="contact-info-list" style="color: var(--ink);">
                    <li style="margin-bottom: 25px; display: flex; gap: 15px; align-items: flex-start;">
                        <span style="font-size: 24px; color: var(--primary);">📍</span>
                        <div>
                            <strong style="display: block; font-size: 16px; margin-bottom: 5px;">Office & Registered Address</strong>
                            <span style="color: var(--graphite); font-size: 14px; line-height: 1.5;">
                                A61, Jai Bhavani Society, Canal Road, Bawadiya Kalan, Bhopal, Madhya Pradesh 462039
                            </span>
                        </div>
                    </li>
                    <li style="margin-bottom: 25px; display: flex; gap: 15px; align-items: flex-start;">
                        <span style="font-size: 24px; color: var(--primary);">📧</span>
                        <div>
                            <strong style="display: block; font-size: 16px; margin-bottom: 5px;">Email Support</strong>
                            <span style="font-size: 14px;">
                                <a href="mailto:info@turvotek.com">info@turvotek.com</a><br>
                                <a href="mailto:turvotekgreen@gmail.com" style="color: var(--graphite);">turvotekgreen@gmail.com</a>
                            </span>
                        </div>
                    </li>
                    <li style="display: flex; gap: 15px; align-items: flex-start;">
                        <span style="font-size: 24px; color: var(--primary);">📞</span>
                        <div>
                            <strong style="display: block; font-size: 16px; margin-bottom: 5px;">Phone & Sales Inquiries</strong>
                            <span style="color: var(--graphite); font-size: 14px;">
                                Sales: +91 96650 56795<br>
                                Support: +91 95224 17455
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Contact form column -->
        <div style="flex: 1.2; min-width: 320px;">
            <h2 style="font-size: 28px; margin-bottom: var(--spacing-lg);">Send a Message</h2>
            
            <div id="form-status-message" style="display: none; margin-bottom: 20px; padding: 15px; border-radius: var(--rounded-md); font-size: 14px; font-weight: 500; transition: all 0.3s ease;"></div>

            <form id="turvotek-contact-form" action="#" method="POST" style="display: grid; gap: 20px;">
                <?php wp_nonce_field( 'turvotek_contact_action', 'contact_nonce' ); ?>
                <input type="hidden" name="action" value="turvotek_submit_contact_form">

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; flex-wrap: wrap;">
                    <div>
                        <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 5px;" for="contact_name">Full Name</label>
                        <input type="text" id="contact_name" name="contact_name" placeholder="Mr. John Doe" required>
                    </div>
                    <div>
                        <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 5px;" for="contact_phone">Phone Number</label>
                        <input type="tel" id="contact_phone" name="contact_phone" placeholder="+91 98765 43210" required>
                    </div>
                </div>
                
                <div>
                    <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 5px;" for="contact_email">Email Address</label>
                    <input type="email" id="contact_email" name="contact_email" placeholder="john.doe@example.com" required>
                </div>
                
                <div>
                    <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 5px;" for="contact_message">How can we help you?</label>
                    <textarea id="contact_message" name="contact_message" rows="5" placeholder="Include panel wattages, structure tilt, or switchgear requirements if any..." required></textarea>
                </div>
                
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary" style="padding: 0 30px;">Submit Query</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('turvotek-contact-form');
    const statusDiv = document.getElementById('form-status-message');
    const submitBtn = form ? form.querySelector('button[type="submit"]') : null;

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Clear previous messages
            statusDiv.style.display = 'none';
            statusDiv.style.borderLeft = 'none';
            statusDiv.innerHTML = '';

            // Get form data
            const formData = new FormData(form);

            // Loading state
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.dataset.originalText = submitBtn.textContent;
                submitBtn.innerHTML = '<span style="display: inline-flex; align-items: center; gap: 8px;"><span class="contact-spinner" style="width: 16px; height: 16px; border: 2px solid rgba(255,255,255,0.3); border-top-color: #fff; border-radius: 50%; display: inline-block; animation: spin 0.8s linear infinite;"></span> Sending...</span>';
            }

            // AJAX request to admin-ajax.php
            fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Show success status
                    statusDiv.style.display = 'block';
                    statusDiv.style.backgroundColor = '#ecfdf5';
                    statusDiv.style.color = '#065f46';
                    statusDiv.style.borderLeft = '4px solid #10b981';
                    statusDiv.innerHTML = data.data.message || 'Thank you! Your message has been sent successfully.';
                    form.reset();
                } else {
                    // Show error status
                    statusDiv.style.display = 'block';
                    statusDiv.style.backgroundColor = '#fef2f2';
                    statusDiv.style.color = '#991b1b';
                    statusDiv.style.borderLeft = '4px solid #ef4444';
                    statusDiv.innerHTML = data.data.message || 'An error occurred. Please try again.';
                }
            })
            .catch(error => {
                statusDiv.style.display = 'block';
                statusDiv.style.backgroundColor = '#fef2f2';
                statusDiv.style.color = '#991b1b';
                statusDiv.style.borderLeft = '4px solid #ef4444';
                statusDiv.innerHTML = 'Connection error. Please check your internet connection and try again.';
            })
            .finally(() => {
                // Restore button
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = submitBtn.dataset.originalText;
                }
            });
        });
    }
});
</script>

<style>
@keyframes spin {
    to { transform: rotate(360deg); }
}
</style>

<?php get_footer(); ?>
