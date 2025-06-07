
document.addEventListener('DOMContentLoaded', () => {
    const galleries = document.querySelectorAll('.event-gallery');
    galleries.forEach(gallery => {
        lightGallery(gallery, {
            selector: 'img',
            plugins: [lgZoom, lgThumbnail],
            speed: 500,
            download: false,
            thumbnail: true,
            animateThumb: true,
            zoomFromOrigin: true,
            allowMediaOverlap: true,
            toggleThumb: true
        });
    });
});

const eventCards = document.querySelectorAll('.event-card');
eventCards.forEach(card => {
    card.addEventListener('click', () => {
        const eventType = card.dataset.event;
        const detailModal = document.getElementById(`${eventType}-detail`);
        if (detailModal) {
            detailModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });
});

// Close event detail modal
function closeEventDetail() {
    const activeModal = document.querySelector('.event-detail.active');
    if (activeModal) {
        activeModal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close modal when clicking outside content
document.querySelectorAll('.event-detail').forEach(modal => {
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeEventDetail();
        }
    });
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeEventDetail();
    }
});

// Prevent event bubbling from modal content
document.querySelectorAll('.event-detail-content').forEach(content => {
    content.addEventListener('click', (e) => {
        e.stopPropagation();
    });
});
