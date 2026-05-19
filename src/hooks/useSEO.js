import { useEffect } from 'react';

/**
 * Custom React Hook for dynamically updating SEO metadata.
 * 
 * @param {Object} seoOptions
 * @param {string} seoOptions.title - The title of the page (will append " | SSE Workforce Services Pvt Ltd").
 * @param {string} seoOptions.description - The page-specific description meta tag.
 * @param {string} [seoOptions.keywords] - Optional comma-separated list of keywords.
 */
export default function useSEO({ title, description, keywords }) {
  useEffect(() => {
    // 1. Update Document Title
    document.title = title ? `${title}` : 'SSE Workforce Services Private Limited';

    // 2. Update Meta Description
    let metaDescription = document.querySelector('meta[name="description"]');
    if (!metaDescription) {
      metaDescription = document.createElement('meta');
      metaDescription.setAttribute('name', 'description');
      document.head.appendChild(metaDescription);
    }
    const defaultDescription = 'SSE Workforce Services Pvt Ltd – Trusted workforce management, technical staffing, and industrial support services since 2011.';
    metaDescription.setAttribute('content', description || defaultDescription);

    // 3. Update Meta Keywords
    let metaKeywords = document.querySelector('meta[name="keywords"]');
    if (keywords) {
      if (!metaKeywords) {
        metaKeywords = document.createElement('meta');
        metaKeywords.setAttribute('name', 'keywords');
        document.head.appendChild(metaKeywords);
      }
      metaKeywords.setAttribute('content', keywords);
    }
  }, [title, description, keywords]);
}
