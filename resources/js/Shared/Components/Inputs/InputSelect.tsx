type Props = {
    label?: string;
    name: string;
    options: { value: string, label: string }[];
    className?: string;
}

export default function InputSelect({ label, name, options, className }: Props) {
    return (
        <div className="mb-4">
            <label htmlFor={name} className="">{label ?? name}:</label>
            <select
                name={name}
                id={name}
                className={`w-full px-2 py-1 border border-green-400 outline-green-600 rounded-md ${className}`}
            >
                {options.map(option => (
                    <option key={option.value} value={option.value}>{option.label}</option>
                ))}
            </select>
        </div>
    );
}

