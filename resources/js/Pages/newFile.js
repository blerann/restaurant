import { Head, Link } from '@inertiajs/vue3';

export default (() => {
const __VLS_setup = async () => {
defineProps({
canLogin: {
type: Boolean,
},
canRegister: {
type: Boolean,
},
laravelVersion: {
type: String,
required: true,
},
phpVersion: {
type: String,
required: true,
},
});
const __VLS_publicComponent = (await import('vue')).defineComponent({
setup() {
return {
$props: (await import('./__VLS_types.js')).makeOptional(defineProps({
canLogin: {
type: Boolean,
},
canRegister: {
type: Boolean,
},
laravelVersion: {
type: String,
required: true,
},
phpVersion: {
type: String,
required: true,
},
})),
};
},
});

const __VLS_componentsOption = {};

let __VLS_name!: 'Welcome';
function __VLS_template() {
let __VLS_ctx!: InstanceType<import('./__VLS_types.js').PickNotAny<typeof __VLS_publicComponent, new () => {}>> & InstanceType<import('./__VLS_types.js').PickNotAny<typeof __VLS_internalComponent, new () => {}>> & {};
/* Components */
let __VLS_localComponents!: NonNullable<typeof __VLS_internalComponent extends { components: infer C; } ? C : {}> & typeof __VLS_componentsOption & typeof __VLS_ctx;
let __VLS_otherComponents!: typeof __VLS_localComponents & import('./__VLS_types.js').GlobalComponents;
let __VLS_own!: import('./__VLS_types.js').SelfComponent<typeof __VLS_name, typeof __VLS_internalComponent & typeof __VLS_publicComponent & (new () => { $slots: typeof __VLS_slots; }) >;
let __VLS_components!: typeof __VLS_otherComponents & Omit<typeof __VLS_own, keyof typeof __VLS_otherComponents>;
/* Style Scoped */
type __VLS_StyleScopedClasses = {};
let __VLS_styleScopedClasses!: __VLS_StyleScopedClasses | keyof __VLS_StyleScopedClasses | (keyof __VLS_StyleScopedClasses)[];
/* CSS variable injection */
/* CSS variable injection end */
let __VLS_templateComponents!: {} &
import('./__VLS_types.js').WithComponent<'Head', typeof __VLS_components, 'Head'> &
import('./__VLS_types.js').WithComponent<'Link', typeof __VLS_components, 'Link'>;
__VLS_components.Head;
// @ts-ignore
[Head,];
__VLS_components.Link; __VLS_components.Link; __VLS_components.Link; __VLS_components.Link; __VLS_components.Link; __VLS_components.Link; __VLS_components.Link; __VLS_components.Link;
// @ts-ignore
[Link, Link, Link, Link, Link, Link, Link, Link,];
{
(__VLS_x as import('./__VLS_types.js').ComponentProps<typeof __VLS_templateComponents.Head>) = { title: ("Welcome"), };
}
{
({} as JSX.IntrinsicElements).div;
({} as JSX.IntrinsicElements).div;
(__VLS_x as JSX.IntrinsicElements)['div'] = { class: ("relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"), };
if (__VLS_ctx.canLogin) {
// @ts-ignore
[canLogin,];
{
({} as JSX.IntrinsicElements).div;
({} as JSX.IntrinsicElements).div;
(__VLS_x as JSX.IntrinsicElements)['div'] = { class: ("sm:fixed sm:top-0 sm:right-0 p-6 text-right"), };
if (__VLS_ctx.$page.props.auth.user) {
// @ts-ignore
[$page,];
{
__VLS_templateComponents.Link;
(__VLS_x as import('./__VLS_types.js').ComponentProps<typeof __VLS_templateComponents.Link>) = { href: ((__VLS_ctx.route('dashboard'))), class: ("font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"), };
// @ts-ignore
[route,];
}
}
else {
{
__VLS_templateComponents.Link;
(__VLS_x as import('./__VLS_types.js').ComponentProps<typeof __VLS_templateComponents.Link>) = { href: ((__VLS_ctx.route('login'))), class: ("font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"), };
// @ts-ignore
[route,];
}
if (__VLS_ctx.canRegister) {
// @ts-ignore
[canRegister,];
{
__VLS_templateComponents.Link;
(__VLS_x as import('./__VLS_types.js').ComponentProps<typeof __VLS_templateComponents.Link>) = { href: ((__VLS_ctx.route('register'))), class: ("ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"), };
// @ts-ignore
[route,];
}
}
}
}
}
{
__VLS_templateComponents.Link;
(__VLS_x as import('./__VLS_types.js').ComponentProps<typeof __VLS_templateComponents.Link>) = { href: ((__VLS_ctx.route('home'))), class: ("ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"), };
// @ts-ignore
[route,];
}
}
if (typeof __VLS_styleScopedClasses === 'object' && !Array.isArray(__VLS_styleScopedClasses)) {
}
declare var __VLS_slots: {};
return __VLS_slots;
}
const __VLS_internalComponent = (await import('vue')).defineComponent({
setup() {
return {
...defineProps({
canLogin: {
type: Boolean,
},
canRegister: {
type: Boolean,
},
laravelVersion: {
type: String,
required: true,
},
phpVersion: {
type: String,
required: true,
},
}),
Head: Head,
Link: Link,
};
},
});
return {} as typeof __VLS_publicComponent;
};
return {} as typeof __VLS_setup extends () => Promise<infer T> ? T : never;
})({} as any);
