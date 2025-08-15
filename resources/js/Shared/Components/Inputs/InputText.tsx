type Props = {
    label?: string;
    name: string;
    type?: string;
    placeholder?: string;
    className?: string;
    autoComplete?: string;
    required?: boolean
    ref?: any
}

export default function InputText({ label, name, type, placeholder, className, autoComplete, required = true, ref }: Props) {
    return (
        <div className="mb-4">
            <label htmlFor={name} className="">{label ?? name} {required ? '*' : ''}:</label>
            <input
                type={type ?? "text"}
                name={name}
                id={name}
                placeholder={placeholder ?? label ?? name}
                autoComplete={autoComplete ?? name}
                required={required}
                ref={ref ?? null}
                className={`w-full px-2 py-1 border border-green-400 outline-green-600 rounded-md ${className}`}
            />
        </div>
    );
}

