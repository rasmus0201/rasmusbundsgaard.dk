export const onIntersection = (
  elem: HTMLElement,
  ratio = 0.5,
  callback: (e: IntersectionObserverEntry) => void
) => {
  // This helper is needed because IntersectionObserver doesn't have
  // an easy mode for when the elem is taller than the viewport.
  // It uses ResizeObserver to re-observe intersection when needed.

  const maxRatio = window.innerHeight / elem.getBoundingClientRect().height;

  const threshold = maxRatio < ratio ? 0.999 * maxRatio : ratio;
  const intersectionObserver = new IntersectionObserver(
    (entries: IntersectionObserverEntry[]) => {
      const entry = entries[0];
      if (entry.isIntersecting && entry.intersectionRatio >= threshold) {
        callback(entry);
      }
    },
    { threshold: [threshold] }
  );

  const resizeObserver = new ResizeObserver(() => {
    const diff =
      maxRatio - window.innerHeight / elem.getBoundingClientRect().height;
    if (Math.abs(diff) > 0.0001) {
      disconnect();
      onIntersection(elem, ratio, callback);
    }
  });

  const disconnect = () => {
    intersectionObserver.disconnect();
    resizeObserver.disconnect();
  };

  resizeObserver.observe(elem);
  intersectionObserver.observe(elem);
};
