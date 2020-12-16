import locale from './ru'

export function trans(key) {
    return locale[key] || key;
}

