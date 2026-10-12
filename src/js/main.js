$(document).ready(function() {
    
    // ===== Smooth Scroll =====
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.getAttribute('href'));
        if(target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // ===== Back to Top Button =====
    var backToTopButton = $('#backToTop');
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            backToTopButton.css('display', 'flex').hide().fadeIn();
        } else {
            backToTopButton.fadeOut();
        }
    });
    
    backToTopButton.on('click', function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    
    // ===== Navbar Scroll Effect =====
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('navbar-scrolled');
        } else {
            $('.navbar').removeClass('navbar-scrolled');
        }
    });
    
    // ===== Form Validation =====
    (function() {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
    
    // ===== Contact Form Submit =====
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        if (this.checkValidity()) {
            var formData = $(this).serialize();
            
            // Animation de chargement
            var submitBtn = $(this).find('button[type="submit"]');
            var originalText = submitBtn.html();
            submitBtn.html('<span class="spinner-border spinner-border-sm me-2"></span>Envoi en cours...').prop('disabled', true);
            
            // Simulation d'envoi (remplacer par votre appel AJAX réel)
            setTimeout(function() {
                // Afficher un message de succès
                var successMessage = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <strong>Merci !</strong> Votre demande a été envoyée avec succès. Nous vous recontacterons dans les plus brefs délais.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;
                
                $('#contactForm').before(successMessage);
                $('#contactForm')[0].reset();
                $('#contactForm').removeClass('was-validated');
                submitBtn.html(originalText).prop('disabled', false);
                
                // Scroll vers le message
                $('html, body').animate({
                    scrollTop: $('.alert-success').offset().top - 100
                }, 500);
                
                // Envoyer les données au serveur (à décommenter et adapter)
                /*
                $.ajax({
                    url: 'process-contact.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Traitement de la réponse
                    },
                    error: function() {
                        alert('Une erreur est survenue. Veuillez réessayer.');
                    }
                });
                */
            }, 1500);
        }
    });
    
    // ===== Newsletter Form =====
    $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();
        
        var email = $(this).find('input[type="email"]').val();
        
        if (email) {
            var submitBtn = $(this).find('button[type="submit"]');
            submitBtn.html('<span class="spinner-border spinner-border-sm"></span>').prop('disabled', true);
            
            setTimeout(function() {
                alert('Merci ! Vous êtes inscrit à notre newsletter.');
                $('#newsletterForm')[0].reset();
                submitBtn.html('<i class="bi bi-send"></i>').prop('disabled', false);
            }, 1000);
        }
    });
    
    // ===== Date Validation =====
    $('#dateArrivee, #dateDepart').on('change', function() {
        var dateArrivee = new Date($('#dateArrivee').val());
        var dateDepart = new Date($('#dateDepart').val());
        
        if (dateArrivee && dateDepart) {
            if (dateDepart <= dateArrivee) {
                $('#dateDepart')[0].setCustomValidity('La date de départ doit être après la date d\'arrivée');
                $('#dateDepart').addClass('is-invalid');
            } else {
                $('#dateDepart')[0].setCustomValidity('');
                $('#dateDepart').removeClass('is-invalid');
                
                // Calculer le nombre de nuits
                var diffTime = Math.abs(dateDepart - dateArrivee);
                var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                
                console.log('Nombre de nuits : ' + diffDays);
            }
        }
    });
    
    // ===== Animations on Scroll =====
    function animateOnScroll() {
        $('.fade-in-element').each(function() {
            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();
            
            if (windowBottom > elementTop + 100) {
                $(this).addClass('fade-in');
            }
        });
    }
    
    $(window).on('scroll', animateOnScroll);
    animateOnScroll(); // Initial check
    
    // ===== Image Lazy Loading Effect =====
    $('.lazy-image').each(function() {
        var img = $(this);
        img.on('load', function() {
            img.addClass('loaded');
        });
    });
    
    // ===== Carousel Auto-height =====
    $('#hero-carousel').on('slid.bs.carousel', function() {
        var activeItem = $(this).find('.carousel-item.active');
        var height = activeItem.height();
        $(this).animate({ height: height }, 300);
    });
    
    // ===== Tooltips Initialization =====
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // ===== Mobile Menu Close on Click =====
    $('.navbar-nav .nav-link').on('click', function() {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
        }
    });
    
    // ===== Prevent Form Resubmission =====
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    
    // ===== Price Calculator (if needed) =====
    function calculatePrice() {
        var hebergement = $('#hebergement').val();
        var climatisation = $('input[name="climatisation"]:checked').val();
        var nbAdultes = parseInt($('#nbAdultes').val()) || 0;
        var nbEnfants = parseInt($('#nbEnfants').val()) || 0;
        var dateArrivee = new Date($('#dateArrivee').val());
        var dateDepart = new Date($('#dateDepart').val());
        
        if (hebergement && dateArrivee && dateDepart && dateDepart > dateArrivee) {
            var diffTime = Math.abs(dateDepart - dateArrivee);
            var nbNuits = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            
            var prixBase = {
                'cottage': 80,
                'domino': 70,
                'family': 90,
                'emplacement': 25
            };
            
            var prix = prixBase[hebergement] * nbNuits;
            
            if (climatisation === 'oui') {
                prix += 5 * nbNuits;
            }
            
            console.log('Prix estimé : ' + prix + '€ pour ' + nbNuits + ' nuit(s)');
            
            // Vous pouvez afficher le prix dans une div dédiée
        }
    }
    
    $('#hebergement, input[name="climatisation"], #nbAdultes, #nbEnfants, #dateArrivee, #dateDepart').on('change', calculatePrice);
    
    // ===== Cookie Consent (Simple version) =====
    if (!localStorage.getItem('cookieConsent')) {
        setTimeout(function() {
            var cookieBanner = `
                <div id="cookieConsent" class="alert alert-dark alert-dismissible fade show position-fixed bottom-0 start-0 end-0 m-3" role="alert" style="z-index: 9999;">
                    <strong>Cookies</strong> - Ce site utilise des cookies pour améliorer votre expérience. 
                    <a href="mentions-legales.php" class="alert-link">En savoir plus</a>
                    <button type="button" class="btn btn-sm btn-light ms-3" onclick="acceptCookies()">J'accepte</button>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
            $('body').append(cookieBanner);
        }, 2000);
    }
    
    // ===== Console Info =====
    console.log('%c🏕️ Camping Nature & Détente', 'font-size: 20px; color: #0d6efd; font-weight: bold;');
    console.log('%cSite développé avec Bootstrap 5.3 et jQuery', 'color: #6c757d;');
});

// ===== Accept Cookies Function =====
function acceptCookies() {
    localStorage.setItem('cookieConsent', 'true');
    $('#cookieConsent').fadeOut(300, function() {
        $(this).remove();
    });
}

// ===== Preloader (Optional) =====
$(window).on('load', function() {
    $('.preloader').fadeOut('slow');
});
