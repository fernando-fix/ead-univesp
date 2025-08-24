export default function InputCSRFToken() {
    const csrfToken = (typeof document !== 'undefined'
        ? document.querySelector<HTMLMetaElement>('meta[name="csrf-token"]')?.content
        : '') || '';
    return <input type="hidden" name="_token" value={csrfToken} />;
}