/* @ds-bundle: {"format":4,"namespace":"PsykologNoDesignSystem_a00c2a","components":[{"name":"Card","sourcePath":"components/content/Card.jsx"},{"name":"FaqRow","sourcePath":"components/content/FaqRow.jsx"},{"name":"Button","sourcePath":"components/core/Button.jsx"},{"name":"Eyebrow","sourcePath":"components/core/Eyebrow.jsx"},{"name":"Icon","sourcePath":"components/core/Icon.jsx"},{"name":"Tag","sourcePath":"components/core/Tag.jsx"},{"name":"Input","sourcePath":"components/forms/Input.jsx"},{"name":"NavBar","sourcePath":"components/navigation/NavBar.jsx"},{"name":"TickerBand","sourcePath":"components/navigation/TickerBand.jsx"}],"sourceHashes":{"components/content/Card.jsx":"90c275f45037","components/content/FaqRow.jsx":"63843212442c","components/core/Button.jsx":"efbed759850e","components/core/Eyebrow.jsx":"981c573c9365","components/core/Icon.jsx":"45fd4956e5ac","components/core/Tag.jsx":"9a1212f08e2c","components/forms/Input.jsx":"69e2a4ab4562","components/navigation/NavBar.jsx":"a7d389c8e31e","components/navigation/TickerBand.jsx":"164b2e2f7f99","ui_kits/website/BookingScreen.jsx":"9d949a9bc54f","ui_kits/website/HomeScreen.jsx":"2c8a438a29fc","ui_kits/website/PricingScreen.jsx":"f551c173664e","ui_kits/website/Shell.jsx":"62d8428c9e08","ui_kits/website/TreatmentsScreen.jsx":"3abcda72b995"},"inlinedExternals":[],"unexposedExports":[]} */

(() => {

const __ds_ns = (window.PsykologNoDesignSystem_a00c2a = window.PsykologNoDesignSystem_a00c2a || {});

const __ds_scope = {};

(__ds_ns.__errors = __ds_ns.__errors || []);

// components/content/Card.jsx
try { (() => {
const tones = {
  white: {
    background: "var(--surface-card)",
    boxShadow: "inset 0 0 0 1px var(--border-hairline)",
    title: "var(--brand-primary)",
    body: "var(--text-body)",
    media: "var(--surface-alice)"
  },
  sky: {
    background: "var(--surface-sky)",
    boxShadow: "none",
    title: "var(--brand-primary)",
    body: "var(--text-strong)",
    media: "rgba(255,255,255,.45)"
  },
  cream: {
    background: "var(--surface-cream)",
    boxShadow: "none",
    title: "var(--brand-primary)",
    body: "var(--text-strong)",
    media: "rgba(255,255,255,.6)"
  },
  teal: {
    background: "var(--surface-card-invert)",
    boxShadow: "none",
    title: "#FFFFFF",
    body: "var(--text-on-dark)",
    media: "rgba(255,255,255,.12)"
  }
};
function Card({
  tone = "white",
  title,
  body,
  media,
  mediaHeight = 96,
  footer,
  interactive = false,
  onClick,
  style,
  children
}) {
  const [hover, setHover] = React.useState(false);
  const t = tones[tone] || tones.white;
  return /*#__PURE__*/React.createElement("div", {
    onClick: onClick,
    onMouseEnter: () => setHover(true),
    onMouseLeave: () => setHover(false),
    style: {
      background: t.background,
      boxShadow: t.boxShadow,
      borderRadius: "var(--radius-card)",
      padding: "var(--pad-card)",
      display: "flex",
      flexDirection: "column",
      gap: "var(--space-4)",
      cursor: interactive || onClick ? "pointer" : "default",
      transform: (interactive || onClick) && hover ? "translateY(calc(-1 * var(--hover-lift)))" : "none",
      transition: "transform var(--dur-hover) var(--ease-hover), box-shadow var(--dur-hover) var(--ease-hover)",
      ...style
    }
  }, media !== undefined && /*#__PURE__*/React.createElement("div", {
    style: {
      background: t.media,
      borderRadius: "var(--radius-media)",
      height: mediaHeight,
      overflow: "hidden",
      display: "flex",
      alignItems: "center",
      justifyContent: "center",
      marginBottom: "var(--space-2)"
    }
  }, typeof media === "string" && media ? /*#__PURE__*/React.createElement("img", {
    src: media,
    alt: "",
    style: {
      width: "100%",
      height: "100%",
      objectFit: "cover",
      display: "block"
    }
  }) : media), title && /*#__PURE__*/React.createElement("h3", {
    style: {
      fontFamily: "var(--font-display)",
      fontWeight: 700,
      fontSize: "var(--type-card-title-size)",
      lineHeight: "32px",
      color: t.title,
      margin: 0
    }
  }, title), body && /*#__PURE__*/React.createElement("p", {
    style: {
      fontFamily: "var(--font-body)",
      fontSize: "var(--type-body-m-size)",
      lineHeight: "var(--type-body-m-lh)",
      color: t.body,
      margin: 0
    }
  }, body), children, footer && /*#__PURE__*/React.createElement("div", {
    style: {
      marginTop: "auto",
      paddingTop: "var(--space-2)"
    }
  }, footer));
}
Object.assign(__ds_scope, { Card });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/content/Card.jsx", error: String((e && e.message) || e) }); }

// components/content/FaqRow.jsx
try { (() => {
function FaqRow({
  question,
  answer,
  defaultOpen = false,
  tone = "warm",
  style,
  children
}) {
  const [open, setOpen] = React.useState(defaultOpen);
  const bg = tone === "warm" ? "var(--surface-cream)" : "transparent";
  return /*#__PURE__*/React.createElement("div", {
    style: {
      borderBottom: "1px solid var(--border-hairline)",
      background: open ? bg : "transparent",
      borderRadius: open ? "var(--radius-card-sm)" : 0,
      transition: "background var(--dur-hover) var(--ease-hover)",
      ...style
    }
  }, /*#__PURE__*/React.createElement("button", {
    onClick: () => setOpen(!open),
    "aria-expanded": open,
    style: {
      width: "100%",
      display: "flex",
      alignItems: "center",
      justifyContent: "space-between",
      gap: "var(--space-6)",
      padding: "var(--space-6) var(--space-8)",
      background: "transparent",
      border: "none",
      cursor: "pointer",
      textAlign: "left"
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      fontFamily: "var(--font-display)",
      fontWeight: 700,
      fontSize: "var(--type-faq-question-size)",
      lineHeight: "27px",
      color: "var(--brand-primary)"
    }
  }, question), /*#__PURE__*/React.createElement("span", {
    "aria-hidden": "true",
    style: {
      position: "relative",
      width: 16,
      height: 16,
      flex: "0 0 auto"
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      position: "absolute",
      top: 7,
      left: 0,
      width: 16,
      height: 2,
      background: "var(--brand-primary)"
    }
  }), /*#__PURE__*/React.createElement("span", {
    style: {
      position: "absolute",
      top: 0,
      left: 7,
      width: 2,
      height: 16,
      background: "var(--brand-primary)",
      opacity: open ? 0 : 1,
      transition: "opacity var(--dur-hover) var(--ease-hover)"
    }
  }))), open && /*#__PURE__*/React.createElement("div", {
    style: {
      padding: "0 var(--space-8) var(--space-6)",
      fontFamily: "var(--font-body)",
      fontSize: "var(--type-body-m-size)",
      lineHeight: "var(--type-body-m-lh)",
      color: "var(--text-body)",
      maxWidth: "var(--measure-copy)"
    }
  }, answer, children));
}
Object.assign(__ds_scope, { FaqRow });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/content/FaqRow.jsx", error: String((e && e.message) || e) }); }

// components/core/Button.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
const base = {
  fontFamily: "var(--font-ui)",
  fontWeight: 700,
  fontSize: "var(--type-button-size)",
  lineHeight: "var(--type-button-lh)",
  borderRadius: "var(--radius-button)",
  border: "none",
  cursor: "pointer",
  display: "inline-flex",
  alignItems: "center",
  justifyContent: "center",
  gap: "var(--space-2)",
  textDecoration: "none",
  transition: "background-color var(--dur-hover) var(--ease-hover), color var(--dur-hover) var(--ease-hover), transform var(--dur-hover) var(--ease-hover)"
};
const pad = {
  primary: {
    padding: "var(--pad-button-y) var(--pad-button-x)"
  },
  compact: {
    padding: "var(--pad-button-compact-y) var(--pad-button-compact-x)"
  }
};
function Button({
  variant = "primary",
  size = "primary",
  disabled = false,
  href,
  iconLeft,
  iconRight,
  onClick,
  style,
  children,
  ...rest
}) {
  const [hover, setHover] = React.useState(false);
  const [active, setActive] = React.useState(false);
  const skins = {
    primary: {
      background: disabled ? "var(--surface-disabled)" : active ? "var(--brand-primary-pressed)" : hover ? "var(--brand-primary-hover)" : "var(--brand-primary)",
      color: disabled ? "var(--text-caption)" : "#FFFFFF"
    },
    outline: {
      background: "transparent",
      color: disabled ? "var(--text-disabled)" : "var(--brand-primary)",
      boxShadow: "inset 0 0 0 2px " + (disabled ? "var(--border-hairline)" : hover ? "var(--brand-primary-hover)" : "var(--brand-primary)")
    },
    link: {
      background: "transparent",
      color: disabled ? "var(--text-disabled)" : hover ? "var(--brand-primary-hover)" : "var(--brand-primary)",
      padding: 0,
      textDecoration: "underline",
      textUnderlineOffset: "4px",
      textDecorationThickness: "2px"
    },
    ghost: {
      background: hover ? "var(--surface-alice)" : "transparent",
      color: "var(--brand-primary)"
    }
  };
  const composed = {
    ...base,
    ...(variant === "link" ? {} : pad[size] || pad.primary),
    ...skins[variant],
    transform: variant !== "link" && hover && !disabled && !active ? "translateY(calc(-1 * var(--hover-lift)))" : "none",
    cursor: disabled ? "not-allowed" : "pointer",
    ...style
  };
  const Tag = href && !disabled ? "a" : "button";
  return /*#__PURE__*/React.createElement(Tag, _extends({
    href: href,
    style: composed,
    disabled: Tag === "button" ? disabled : undefined,
    "aria-disabled": disabled || undefined,
    onClick: disabled ? undefined : onClick,
    onMouseEnter: () => setHover(true),
    onMouseLeave: () => {
      setHover(false);
      setActive(false);
    },
    onMouseDown: () => setActive(true),
    onMouseUp: () => setActive(false)
  }, rest), iconLeft, children, iconRight);
}
Object.assign(__ds_scope, { Button });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/core/Button.jsx", error: String((e && e.message) || e) }); }

// components/core/Eyebrow.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
function Eyebrow({
  tone = "brand",
  style,
  children,
  ...rest
}) {
  const colors = {
    brand: "var(--brand-primary)",
    muted: "var(--text-caption)",
    lime: "var(--surface-lime)",
    reversed: "var(--text-on-dark)"
  };
  return /*#__PURE__*/React.createElement("p", _extends({
    style: {
      fontFamily: "var(--font-ui)",
      fontWeight: 500,
      fontSize: "var(--type-eyebrow-size)",
      lineHeight: "var(--type-eyebrow-lh)",
      letterSpacing: "var(--tracking-eyebrow)",
      textTransform: "uppercase",
      color: colors[tone],
      margin: 0,
      ...style
    }
  }, rest), children);
}
Object.assign(__ds_scope, { Eyebrow });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/core/Eyebrow.jsx", error: String((e && e.message) || e) }); }

// components/core/Icon.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
/* Lucide is the substituted icon set: outline only, 2px stroke, rounded caps
   and joins — the exact geometry the brand guidelines specify. The UMD build is
   loaded from CDN by the page; this component just mounts a placeholder that
   Lucide hydrates. */
function Icon({
  name,
  size = 24,
  stroke = "var(--brand-primary)",
  strokeWidth = 2,
  style,
  ...rest
}) {
  const ref = React.useRef(null);
  React.useEffect(() => {
    if (window.lucide && ref.current) {
      ref.current.innerHTML = "";
      const el = document.createElement("i");
      el.setAttribute("data-lucide", name);
      ref.current.appendChild(el);
      window.lucide.createIcons({
        attrs: {
          width: size,
          height: size,
          stroke,
          "stroke-width": strokeWidth,
          "stroke-linecap": "round",
          "stroke-linejoin": "round"
        },
        nameAttr: "data-lucide"
      });
    }
  }, [name, size, stroke, strokeWidth]);
  return /*#__PURE__*/React.createElement("span", _extends({
    ref: ref,
    "aria-hidden": "true",
    style: {
      display: "inline-flex",
      width: size,
      height: size,
      flex: "0 0 auto",
      ...style
    }
  }, rest));
}
Object.assign(__ds_scope, { Icon });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/core/Icon.jsx", error: String((e && e.message) || e) }); }

// components/core/Tag.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
const tones = {
  neutral: {
    background: "var(--surface-alice)",
    color: "var(--brand-primary)"
  },
  teal: {
    background: "var(--brand-primary)",
    color: "var(--text-on-dark)"
  },
  lime: {
    background: "var(--surface-lime)",
    color: "var(--brand-primary)"
  },
  sky: {
    background: "var(--surface-sky)",
    color: "var(--brand-primary)"
  },
  cream: {
    background: "var(--surface-cream)",
    color: "var(--brand-primary)"
  },
  olive: {
    background: "var(--surface-white)",
    color: "var(--accent-olive)",
    boxShadow: "inset 0 0 0 1px var(--accent-olive)"
  }
};
function Tag({
  tone = "neutral",
  pill = false,
  style,
  children,
  ...rest
}) {
  return /*#__PURE__*/React.createElement("span", _extends({
    style: {
      fontFamily: "var(--font-ui)",
      fontWeight: 500,
      fontSize: "var(--type-eyebrow-size)",
      lineHeight: "var(--type-eyebrow-lh)",
      letterSpacing: ".4px",
      padding: "6px 10px",
      borderRadius: pill ? "var(--radius-pill)" : "var(--radius-chip)",
      display: "inline-block",
      ...tones[tone],
      ...style
    }
  }, rest), children);
}
Object.assign(__ds_scope, { Tag });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/core/Tag.jsx", error: String((e && e.message) || e) }); }

// components/forms/Input.jsx
try { (() => {
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }
function Input({
  label,
  placeholder = "Your email address",
  type = "text",
  value,
  onChange,
  error,
  hint,
  disabled = false,
  trailing,
  as = "input",
  rows = 4,
  style,
  ...rest
}) {
  const [focus, setFocus] = React.useState(false);
  const Field = as === "textarea" ? "textarea" : as === "select" ? "select" : "input";
  const fieldStyle = {
    width: "100%",
    fontFamily: "var(--font-ui)",
    fontWeight: 400,
    fontSize: "var(--type-body-m-size)",
    lineHeight: "var(--type-button-lh)",
    color: disabled ? "var(--text-disabled)" : "var(--text-strong)",
    background: disabled ? "var(--surface-disabled)" : "var(--surface-white)",
    border: "1px solid " + (error ? "var(--accent-signal-red)" : focus ? "var(--brand-primary)" : "var(--border-hairline)"),
    borderRadius: "var(--radius-button)",
    padding: "14px 16px",
    outline: "none",
    boxShadow: focus ? "0 0 0 2px var(--brand-focus)" : "none",
    transition: "border-color var(--dur-hover) var(--ease-hover), box-shadow var(--dur-hover) var(--ease-hover)",
    resize: as === "textarea" ? "vertical" : undefined
  };
  return /*#__PURE__*/React.createElement("label", {
    style: {
      display: "flex",
      flexDirection: "column",
      gap: "var(--space-2)",
      ...style
    }
  }, label && /*#__PURE__*/React.createElement("span", {
    style: {
      fontFamily: "var(--font-ui)",
      fontWeight: 500,
      fontSize: "var(--type-nav-size)",
      color: "var(--text-strong)"
    }
  }, label), /*#__PURE__*/React.createElement("span", {
    style: {
      position: "relative",
      display: "flex",
      alignItems: "center",
      gap: "var(--space-2)"
    }
  }, /*#__PURE__*/React.createElement(Field, _extends({
    type: as === "input" ? type : undefined,
    rows: as === "textarea" ? rows : undefined,
    placeholder: placeholder,
    value: value,
    onChange: onChange,
    disabled: disabled,
    onFocus: () => setFocus(true),
    onBlur: () => setFocus(false),
    style: fieldStyle
  }, rest)), trailing && /*#__PURE__*/React.createElement("span", {
    style: {
      flex: "0 0 auto"
    }
  }, trailing)), (error || hint) && /*#__PURE__*/React.createElement("span", {
    style: {
      fontFamily: "var(--font-body)",
      fontSize: "var(--type-body-s-size)",
      lineHeight: "var(--type-body-s-lh)",
      color: error ? "var(--text-error)" : "var(--text-caption)"
    }
  }, error || hint));
}
Object.assign(__ds_scope, { Input });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/forms/Input.jsx", error: String((e && e.message) || e) }); }

// components/navigation/NavBar.jsx
try { (() => {
function NavBar({
  logoSrc = "/assets/logo.svg",
  logoAlt = "psykolog.no",
  links = ["Services", "Therapy", "About Us", "Pricing", "Contact"],
  activeLink,
  ctaLabel = "Book An Appointment",
  onNavigate,
  onCta,
  bordered = true,
  style
}) {
  const [open, setOpen] = React.useState(false);
  return /*#__PURE__*/React.createElement("header", {
    style: {
      background: "var(--surface-white)",
      borderBottom: bordered ? "1px solid var(--border-hairline)" : "none",
      ...style
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      maxWidth: "var(--container)",
      margin: "0 auto",
      padding: "16px var(--container-margin)",
      display: "flex",
      alignItems: "center",
      gap: "var(--space-6)"
    }
  }, /*#__PURE__*/React.createElement("a", {
    href: "#",
    onClick: e => {
      e.preventDefault();
      onNavigate && onNavigate("home");
    },
    style: {
      display: "flex",
      alignItems: "center"
    }
  }, /*#__PURE__*/React.createElement("img", {
    src: logoSrc,
    alt: logoAlt,
    style: {
      height: 34,
      width: "auto",
      display: "block"
    }
  })), /*#__PURE__*/React.createElement("nav", {
    style: {
      marginLeft: "auto",
      display: "flex",
      alignItems: "center",
      gap: "var(--gap-nav)"
    },
    "data-ps-nav": true
  }, links.map(l => /*#__PURE__*/React.createElement("a", {
    key: l,
    href: "#",
    onClick: e => {
      e.preventDefault();
      onNavigate && onNavigate(l);
    },
    style: {
      fontFamily: "var(--font-ui)",
      fontWeight: 500,
      fontSize: "var(--type-nav-size)",
      lineHeight: "var(--type-nav-lh)",
      textDecoration: "none",
      color: activeLink === l ? "var(--brand-primary)" : "var(--text-strong)"
    }
  }, l))), /*#__PURE__*/React.createElement(__ds_scope.Button, {
    size: "compact",
    onClick: onCta,
    "data-ps-nav-cta": true,
    style: {
      marginLeft: "var(--space-6)"
    }
  }, ctaLabel), /*#__PURE__*/React.createElement("button", {
    "aria-label": "Menu",
    onClick: () => setOpen(!open),
    "data-ps-nav-toggle": true,
    style: {
      display: "none",
      marginLeft: "auto",
      order: 9,
      background: "transparent",
      border: "1px solid var(--border-hairline)",
      borderRadius: "var(--radius-button)",
      padding: "8px 10px",
      cursor: "pointer",
      color: "var(--brand-primary)"
    }
  }, /*#__PURE__*/React.createElement("span", {
    style: {
      display: "block",
      width: 18,
      height: 2,
      background: "currentColor",
      marginBottom: 4
    }
  }), /*#__PURE__*/React.createElement("span", {
    style: {
      display: "block",
      width: 18,
      height: 2,
      background: "currentColor",
      marginBottom: 4
    }
  }), /*#__PURE__*/React.createElement("span", {
    style: {
      display: "block",
      width: 18,
      height: 2,
      background: "currentColor"
    }
  }))), open && /*#__PURE__*/React.createElement("div", {
    style: {
      padding: "0 var(--container-margin) var(--space-6)",
      display: "flex",
      flexDirection: "column",
      gap: "var(--space-4)"
    },
    "data-ps-nav-drawer": true
  }, links.map(l => /*#__PURE__*/React.createElement("a", {
    key: l,
    href: "#",
    onClick: e => {
      e.preventDefault();
      setOpen(false);
      onNavigate && onNavigate(l);
    },
    style: {
      fontFamily: "var(--font-ui)",
      fontWeight: 500,
      fontSize: "var(--type-nav-size)",
      color: "var(--text-strong)",
      textDecoration: "none"
    }
  }, l)), /*#__PURE__*/React.createElement(__ds_scope.Button, {
    size: "compact",
    onClick: () => {
      setOpen(false);
      onCta && onCta();
    },
    style: {
      width: "100%",
      marginTop: "var(--space-2)"
    }
  }, ctaLabel)), /*#__PURE__*/React.createElement("style", null, "@media (max-width:1023px){[data-ps-nav]{display:none!important}[data-ps-nav-cta]{display:none!important}[data-ps-nav-toggle]{display:block!important}}"));
}
Object.assign(__ds_scope, { NavBar });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/navigation/NavBar.jsx", error: String((e && e.message) || e) }); }

// components/navigation/TickerBand.jsx
try { (() => {
function TickerBand({
  items = ["ADHD", "Bipolar disorder", "Depression", "Anxiety", "Addiction", "Trauma", "Sleep"],
  animate = true,
  style
}) {
  const row = /*#__PURE__*/React.createElement("div", {
    style: {
      display: "flex",
      alignItems: "center",
      gap: 64,
      paddingInline: 32,
      flex: "0 0 auto"
    }
  }, items.map((t, i) => /*#__PURE__*/React.createElement("span", {
    key: i,
    style: {
      fontFamily: "var(--font-display)",
      fontWeight: 700,
      fontSize: "var(--type-h5-size)",
      lineHeight: "var(--type-h5-lh)",
      color: "var(--brand-primary)",
      whiteSpace: "nowrap"
    }
  }, t)));
  return /*#__PURE__*/React.createElement("div", {
    style: {
      background: "var(--surface-ticker)",
      height: 96,
      display: "flex",
      alignItems: "center",
      overflow: "hidden",
      ...style
    }
  }, /*#__PURE__*/React.createElement("div", {
    style: {
      display: "flex",
      animation: animate ? "ps-ticker 38s linear infinite" : "none"
    }
  }, row, row), /*#__PURE__*/React.createElement("style", null, "@keyframes ps-ticker{from{transform:translateX(0)}to{transform:translateX(-50%)}}@media (prefers-reduced-motion:reduce){@keyframes ps-ticker{from{transform:none}to{transform:none}}}"));
}
Object.assign(__ds_scope, { TickerBand });
})(); } catch (e) { __ds_ns.__errors.push({ path: "components/navigation/TickerBand.jsx", error: String((e && e.message) || e) }); }

// ui_kits/website/BookingScreen.jsx
try { (() => {
(() => {
  const {
    Button,
    Card,
    Eyebrow,
    Input,
    Icon,
    Tag
  } = window.PsykologNoDesignSystem_a00c2a || {};
  function BookingScreen({
    onNavigate
  }) {
    const [step, setStep] = React.useState(0);
    const [format, setFormat] = React.useState("Video consultation");
    const [slot, setSlot] = React.useState(null);
    const [email, setEmail] = React.useState("");
    const [error, setError] = React.useState("");
    const slots = ["Mon 03 Aug · 09:00", "Mon 03 Aug · 13:30", "Tue 04 Aug · 08:15", "Tue 04 Aug · 15:45", "Wed 05 Aug · 10:00", "Thu 06 Aug · 11:30"];
    const steps = ["Format", "Time", "Details", "Confirmed"];
    return /*#__PURE__*/React.createElement(Section, {
      ground: "calm",
      style: {
        minHeight: 720
      }
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        maxWidth: 880,
        marginInline: "auto"
      }
    }, /*#__PURE__*/React.createElement(Eyebrow, {
      style: {
        marginBottom: 16
      }
    }, "Booking"), /*#__PURE__*/React.createElement("h1", {
      style: {
        marginBottom: 40
      }
    }, "Book an appointment"), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 8,
        marginBottom: 32,
        flexWrap: "wrap"
      }
    }, steps.map((s, i) => /*#__PURE__*/React.createElement("div", {
      key: s,
      style: {
        display: "flex",
        alignItems: "center",
        gap: 8,
        padding: "8px 14px",
        borderRadius: "var(--radius-pill)",
        background: i === step ? "var(--brand-primary)" : i < step ? "var(--surface-lime)" : "var(--surface-white)",
        color: i === step ? "#fff" : "var(--brand-primary)",
        fontFamily: "var(--font-ui)",
        fontWeight: 500,
        fontSize: 14
      }
    }, i < step ? /*#__PURE__*/React.createElement(Icon, {
      name: "check",
      size: 16,
      stroke: "var(--brand-primary)"
    }) : /*#__PURE__*/React.createElement("span", null, i + 1), s))), /*#__PURE__*/React.createElement("div", {
      style: {
        background: "var(--surface-white)",
        borderRadius: "var(--radius-feature)",
        padding: 40,
        boxShadow: "inset 0 0 0 1px var(--border-hairline)"
      }
    }, step === 0 && /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h5", {
      style: {
        marginBottom: 24
      }
    }, "How would you like to meet?"), /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-3",
      style: {
        gap: 16
      }
    }, [["Video consultation", "video", "Anywhere in Norway"], ["In clinic — Oslo", "building-2", "Storgata 10"], ["In clinic — Ski", "building-2", "Jernbaneveien 4"]].map(([t, ic, meta]) => /*#__PURE__*/React.createElement("button", {
      key: t,
      onClick: () => setFormat(t),
      style: {
        textAlign: "left",
        cursor: "pointer",
        background: format === t ? "var(--surface-sky)" : "var(--surface-white)",
        border: "none",
        boxShadow: "inset 0 0 0 " + (format === t ? "2px var(--brand-primary)" : "1px var(--border-hairline)"),
        borderRadius: "var(--radius-card)",
        padding: 20,
        display: "flex",
        flexDirection: "column",
        gap: 10
      }
    }, /*#__PURE__*/React.createElement(Icon, {
      name: ic,
      size: 24
    }), /*#__PURE__*/React.createElement("span", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 700,
        fontSize: 18,
        color: "var(--brand-primary)"
      }
    }, t), /*#__PURE__*/React.createElement("span", {
      style: {
        fontFamily: "var(--font-ui)",
        fontSize: 13,
        color: "var(--text-caption)"
      }
    }, meta)))), /*#__PURE__*/React.createElement(Button, {
      style: {
        marginTop: 32
      },
      onClick: () => setStep(1)
    }, "Continue")), step === 1 && /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h5", {
      style: {
        marginBottom: 8
      }
    }, "Pick a time"), /*#__PURE__*/React.createElement("p", {
      style: {
        marginBottom: 24,
        color: "var(--text-caption)",
        fontSize: 16
      }
    }, format, " \xB7 first available in 2 days"), /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-3",
      style: {
        gap: 12
      }
    }, slots.map(s => /*#__PURE__*/React.createElement("button", {
      key: s,
      onClick: () => setSlot(s),
      style: {
        cursor: "pointer",
        fontFamily: "var(--font-ui)",
        fontWeight: 500,
        fontSize: 15,
        padding: "14px 12px",
        borderRadius: "var(--radius-button)",
        border: "none",
        background: slot === s ? "var(--brand-primary)" : "var(--surface-white)",
        color: slot === s ? "#fff" : "var(--text-strong)",
        boxShadow: slot === s ? "none" : "inset 0 0 0 1px var(--border-hairline)"
      }
    }, s))), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        marginTop: 32
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "outline",
      onClick: () => setStep(0)
    }, "Back"), /*#__PURE__*/React.createElement(Button, {
      disabled: !slot,
      onClick: () => setStep(2)
    }, "Continue"))), step === 2 && /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h5", {
      style: {
        marginBottom: 24
      }
    }, "Your details"), /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-2",
      style: {
        gap: 20
      }
    }, /*#__PURE__*/React.createElement(Input, {
      label: "First name",
      placeholder: "Anna"
    }), /*#__PURE__*/React.createElement(Input, {
      label: "Last name",
      placeholder: "Berg"
    }), /*#__PURE__*/React.createElement(Input, {
      label: "Email",
      placeholder: "Your email address",
      value: email,
      error: error,
      onChange: e => {
        setEmail(e.target.value);
        setError("");
      }
    }), /*#__PURE__*/React.createElement(Input, {
      label: "Phone",
      placeholder: "+47"
    }), /*#__PURE__*/React.createElement(Input, {
      label: "What would you like help with?",
      as: "textarea",
      rows: 3,
      placeholder: "A few sentences is enough",
      style: {
        gridColumn: "1 / -1"
      }
    })), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        marginTop: 32
      }
    }, /*#__PURE__*/React.createElement(Button, {
      variant: "outline",
      onClick: () => setStep(1)
    }, "Back"), /*#__PURE__*/React.createElement(Button, {
      onClick: () => email.includes("@") ? setStep(3) : setError("Enter a valid email address")
    }, "Confirm booking"))), step === 3 && /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 20
      }
    }, /*#__PURE__*/React.createElement(Icon, {
      name: "calendar-check",
      size: 32
    }), /*#__PURE__*/React.createElement("h5", null, "Booked"), /*#__PURE__*/React.createElement("p", null, format, " \xB7 ", slot, ". A confirmation is on its way to ", email || "your inbox", ". You can bring someone with you."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        marginTop: 8
      }
    }, /*#__PURE__*/React.createElement(Button, {
      onClick: () => onNavigate("home")
    }, "Back to home"), /*#__PURE__*/React.createElement(Button, {
      variant: "link",
      onClick: () => {
        setStep(0);
        setSlot(null);
      }
    }, "Book another"))))));
  }
  Object.assign(window, {
    BookingScreen
  });
})();
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/website/BookingScreen.jsx", error: String((e && e.message) || e) }); }

// ui_kits/website/HomeScreen.jsx
try { (() => {
(() => {
  const {
    Button,
    Card,
    Eyebrow,
    Tag,
    TickerBand,
    FaqRow,
    Icon
  } = window.PsykologNoDesignSystem_a00c2a || {};
  function HomeScreen({
    onNavigate
  }) {
    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("section", {
      style: {
        background: "var(--surface-cream)",
        paddingTop: 96,
        paddingBottom: 96
      }
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-container ps-grid-split"
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement(Eyebrow, {
      style: {
        marginBottom: 20
      }
    }, "Psykolog.no \xB7 Mental health care"), /*#__PURE__*/React.createElement("h1", {
      className: "ps-display",
      style: {
        margin: 0
      }
    }, "Specialist care,", /*#__PURE__*/React.createElement("br", null), "without the wait."), /*#__PURE__*/React.createElement("h4", {
      style: {
        marginTop: 24,
        fontSize: 26,
        lineHeight: "36px",
        maxWidth: "var(--measure-hero)"
      }
    }, "Book a video consultation \u2014 usually within 1\u20133 days."), /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: "var(--type-body-l-size)",
        lineHeight: "var(--type-body-l-lh)",
        color: "var(--text-body)",
        marginTop: 24,
        maxWidth: "var(--measure-hero)"
      }
    }, "We connect you with licensed psychologists for assessment, therapy and follow-up. Video, phone or in clinic in Oslo and Ski \u2014 you choose."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 16,
        marginTop: 40,
        flexWrap: "wrap"
      }
    }, /*#__PURE__*/React.createElement(Button, {
      onClick: () => onNavigate("Booking")
    }, "Book An Appointment"), /*#__PURE__*/React.createElement(Button, {
      variant: "outline",
      onClick: () => onNavigate("Pricing")
    }, "See pricing")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 24,
        marginTop: 40,
        flexWrap: "wrap"
      }
    }, [["clock", "1–3 days to first session"], ["shield-check", "Licensed psychologists"], ["map-pin", "Oslo · Ski · nationwide video"]].map(([ic, t]) => /*#__PURE__*/React.createElement("span", {
      key: t,
      style: {
        display: "flex",
        alignItems: "center",
        gap: 10,
        fontFamily: "var(--font-ui)",
        fontSize: 15,
        color: "var(--text-strong)"
      }
    }, /*#__PURE__*/React.createElement(Icon, {
      name: ic,
      size: 20
    }), t)))), /*#__PURE__*/React.createElement("div", {
      className: "ps-collage"
    }, /*#__PURE__*/React.createElement("img", {
      src: "../../assets/imagery/photo-untreated.png",
      alt: "",
      style: {
        width: "100%",
        height: 300,
        objectFit: "cover",
        borderRadius: 8,
        gridRow: "span 2"
      }
    }), /*#__PURE__*/React.createElement("img", {
      src: "../../assets/imagery/photo-cream-scrim.png",
      alt: "",
      style: {
        width: "100%",
        height: 142,
        objectFit: "cover",
        borderRadius: 8
      }
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        background: "var(--brand-primary)",
        borderRadius: 8,
        height: 142,
        padding: 20,
        display: "flex",
        flexDirection: "column",
        justifyContent: "space-between"
      }
    }, /*#__PURE__*/React.createElement(Eyebrow, {
      tone: "lime"
    }, "This week"), /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 700,
        fontSize: 32,
        color: "#fff",
        lineHeight: 1.1
      }
    }, "41 slots", /*#__PURE__*/React.createElement("br", null), /*#__PURE__*/React.createElement("span", {
      style: {
        fontSize: 16,
        fontFamily: "var(--font-body)",
        fontWeight: 400,
        color: "var(--text-on-dark)"
      }
    }, "open for video")))))), /*#__PURE__*/React.createElement(TickerBand, null), /*#__PURE__*/React.createElement(Section, null, /*#__PURE__*/React.createElement(SectionHead, {
      eyebrow: "Services",
      title: "Three ways to be seen",
      lead: "Every route starts with the same clinical intake, so nothing has to be repeated."
    }), /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-3"
    }, /*#__PURE__*/React.createElement(Card, {
      tone: "white",
      interactive: true,
      onClick: () => onNavigate("Treatments"),
      media: "../../assets/imagery/photo-cream-scrim.png",
      mediaHeight: 180,
      title: "Video consultation",
      body: "Clinical evaluation and follow-up from wherever you are, usually within a week.",
      footer: /*#__PURE__*/React.createElement(Button, {
        variant: "link"
      }, "Read more")
    }), /*#__PURE__*/React.createElement(Card, {
      tone: "sky",
      interactive: true,
      onClick: () => onNavigate("Treatments"),
      media: /*#__PURE__*/React.createElement(Icon, {
        name: "clipboard-list",
        size: 32
      }),
      mediaHeight: 180,
      title: "Assessment",
      body: "Structured diagnostic assessment for ADHD, bipolar disorder and addiction.",
      footer: /*#__PURE__*/React.createElement(Button, {
        variant: "link"
      }, "Read more")
    }), /*#__PURE__*/React.createElement(Card, {
      tone: "teal",
      interactive: true,
      onClick: () => onNavigate("Treatments"),
      media: /*#__PURE__*/React.createElement(Icon, {
        name: "building-2",
        size: 32,
        stroke: "var(--text-on-dark)"
      }),
      mediaHeight: 180,
      title: "In clinic",
      body: "Meet us in Oslo or Ski when a physical consultation is the right call.",
      footer: /*#__PURE__*/React.createElement(Button, {
        variant: "link",
        style: {
          color: "var(--surface-lime)"
        }
      }, "Read more")
    }))), /*#__PURE__*/React.createElement(Section, {
      ground: "calm"
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-split-rev"
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement(Eyebrow, {
      style: {
        marginBottom: 16
      }
    }, "What we treat"), /*#__PURE__*/React.createElement("h2", null, "Conditions we assess and treat"), /*#__PURE__*/React.createElement("p", {
      style: {
        marginTop: 20,
        fontSize: "var(--type-body-l-size)",
        lineHeight: "var(--type-body-l-lh)"
      }
    }, "Specialists, not generalists. If a condition is outside our scope we say so and refer you on."), /*#__PURE__*/React.createElement(Button, {
      variant: "outline",
      style: {
        marginTop: 32
      },
      onClick: () => onNavigate("Treatments")
    }, "All treatments")), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexWrap: "wrap",
        gap: 12
      }
    }, ["ADHD", "Bipolar disorder", "Depression", "Anxiety", "Addiction", "Trauma", "Sleep", "Burnout", "OCD", "Grief", "Panic", "Stress"].map((c, i) => /*#__PURE__*/React.createElement(Tag, {
      key: c,
      tone: i % 5 === 0 ? "lime" : "neutral",
      style: {
        fontSize: 15,
        padding: "10px 14px",
        background: i % 5 === 0 ? "var(--surface-lime)" : "var(--surface-white)"
      }
    }, c))))), /*#__PURE__*/React.createElement(Section, null, /*#__PURE__*/React.createElement(SectionHead, {
      eyebrow: "Questions",
      title: "Before you book"
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        maxWidth: 880
      }
    }, /*#__PURE__*/React.createElement(FaqRow, {
      question: "How soon can I get an appointment?",
      defaultOpen: true,
      answer: "Usually within 1\u20133 days for a video consultation. In-clinic slots in Oslo and Ski come from the same calendar."
    }), /*#__PURE__*/React.createElement(FaqRow, {
      question: "Do you assess ADHD in adults?",
      answer: "Yes. The assessment is structured, evidence-based and carried out by a specialist."
    }), /*#__PURE__*/React.createElement(FaqRow, {
      question: "Can I bring someone with me?",
      answer: "You can bring someone with you to any consultation, in clinic or on video."
    }), /*#__PURE__*/React.createElement(FaqRow, {
      question: "Do I need a referral?",
      answer: "No. You can book directly with us."
    }))), /*#__PURE__*/React.createElement(Section, {
      ground: "dark"
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        alignItems: "center",
        justifyContent: "space-between",
        gap: 48,
        flexWrap: "wrap"
      }
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement(Eyebrow, {
      tone: "lime",
      style: {
        marginBottom: 16
      }
    }, "Ready when you are"), /*#__PURE__*/React.createElement("h2", {
      style: {
        color: "#fff"
      }
    }, "Book a video consultation"), /*#__PURE__*/React.createElement("p", {
      style: {
        color: "var(--text-on-dark)",
        marginTop: 16,
        fontSize: "var(--type-body-l-size)",
        lineHeight: "var(--type-body-l-lh)"
      }
    }, "Three steps, no referral, no waiting list.")), /*#__PURE__*/React.createElement(Button, {
      style: {
        background: "var(--surface-lime)",
        color: "var(--brand-primary)"
      },
      onClick: () => onNavigate("Booking")
    }, "Book An Appointment"))));
  }
  Object.assign(window, {
    HomeScreen
  });
})();
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/website/HomeScreen.jsx", error: String((e && e.message) || e) }); }

// ui_kits/website/PricingScreen.jsx
try { (() => {
(() => {
  const {
    Card,
    Button,
    Eyebrow,
    FaqRow,
    Tag
  } = window.PsykologNoDesignSystem_a00c2a || {};
  function PricingScreen({
    onNavigate
  }) {
    const plans = [["Video consultation", "1 450 kr", "45 minutes", ["Licensed psychologist", "Usually within 1–3 days", "Written summary after"], "white"], ["Assessment", "6 900 kr", "3 sessions + report", ["Structured diagnostic interview", "Rating scales and history", "Written clinical report"], "sky"], ["In clinic", "1 750 kr", "60 minutes · Oslo or Ski", ["Physical consultation", "Bring someone with you", "Same clinical intake"], "white"]];
    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("section", {
      style: {
        background: "var(--surface-cream)",
        paddingTop: 80,
        paddingBottom: 64
      }
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-container"
    }, /*#__PURE__*/React.createElement(Eyebrow, {
      style: {
        marginBottom: 20
      }
    }, "Pricing"), /*#__PURE__*/React.createElement("h1", null, "What it costs"), /*#__PURE__*/React.createElement("p", {
      style: {
        marginTop: 20,
        fontSize: "var(--type-body-l-size)",
        lineHeight: "var(--type-body-l-lh)",
        maxWidth: "var(--measure-hero)"
      }
    }, "One price per session. No membership, no subscription, no hidden intake fee."))), /*#__PURE__*/React.createElement(Section, null, /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-3"
    }, plans.map(([t, price, meta, items, tone]) => /*#__PURE__*/React.createElement(Card, {
      key: t,
      tone: tone,
      title: t,
      footer: /*#__PURE__*/React.createElement(Button, {
        variant: tone === "sky" ? "primary" : "outline",
        onClick: () => onNavigate("Booking"),
        style: {
          width: "100%"
        }
      }, "Book ", t.toLowerCase())
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 700,
        fontSize: 40,
        lineHeight: "48px",
        color: "var(--brand-primary)"
      }
    }, price), /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-ui)",
        fontSize: 14,
        color: "var(--text-caption)"
      }
    }, meta), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 10,
        marginTop: 12,
        marginBottom: 12
      }
    }, items.map(i => /*#__PURE__*/React.createElement("div", {
      key: i,
      style: {
        display: "flex",
        gap: 10,
        fontFamily: "var(--font-body)",
        fontSize: 16,
        color: "var(--text-body)"
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        color: "var(--accent-olive)"
      }
    }, "\u2014"), i))))))), /*#__PURE__*/React.createElement(Section, {
      ground: "calm"
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        maxWidth: 880,
        marginInline: "auto"
      }
    }, /*#__PURE__*/React.createElement("h2", {
      style: {
        marginBottom: 32
      }
    }, "Payment questions"), /*#__PURE__*/React.createElement(FaqRow, {
      tone: "plain",
      question: "Is any of this covered by HELFO?",
      defaultOpen: true,
      answer: "Private psychological consultations are not reimbursed. We tell you the full price before you book."
    }), /*#__PURE__*/React.createElement(FaqRow, {
      tone: "plain",
      question: "Can I cancel?",
      answer: "Free cancellation up to 24 hours before the appointment."
    }), /*#__PURE__*/React.createElement(FaqRow, {
      tone: "plain",
      question: "Do you invoice employers?",
      answer: "Yes \u2014 occupational health and employer-funded sessions can be invoiced directly."
    }))));
  }
  Object.assign(window, {
    PricingScreen
  });
})();
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/website/PricingScreen.jsx", error: String((e && e.message) || e) }); }

// ui_kits/website/Shell.jsx
try { (() => {
(() => {
  const {
    NavBar,
    TickerBand,
    Button,
    Eyebrow,
    Input,
    Icon,
    Tag
  } = window.PsykologNoDesignSystem_a00c2a || {};
  function Footer({
    onNavigate
  }) {
    return /*#__PURE__*/React.createElement("footer", {
      style: {
        background: "var(--surface-alice)",
        paddingTop: 64,
        paddingBottom: 40
      }
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-container ps-grid-footer"
    }, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("img", {
      src: "../../assets/logo.svg",
      alt: "psykolog.no",
      style: {
        height: 30,
        display: "block"
      }
    }), /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: 16,
        lineHeight: "26px",
        color: "var(--text-body)",
        marginTop: 16,
        maxWidth: 260
      }
    }, "Private psychological support in Norway. Video consultations nationwide, clinics in Oslo and Ski.")), [["Services", ["Video consultation", "Assessment", "In clinic", "Follow-up"]], ["Company", ["About us", "Our psychologists", "Pricing", "Contact"]]].map(([h, items]) => /*#__PURE__*/React.createElement("div", {
      key: h
    }, /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 700,
        fontSize: 18,
        color: "var(--brand-primary)",
        marginBottom: 14
      }
    }, h), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 10
      }
    }, items.map(i => /*#__PURE__*/React.createElement("a", {
      key: i,
      href: "#",
      onClick: e => {
        e.preventDefault();
        onNavigate && onNavigate(i);
      },
      style: {
        fontFamily: "var(--font-ui)",
        fontSize: 15,
        color: "var(--text-body)",
        textDecoration: "none"
      }
    }, i))))), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 700,
        fontSize: 18,
        color: "var(--brand-primary)",
        marginBottom: 14
      }
    }, "Stay informed"), /*#__PURE__*/React.createElement(Input, {
      placeholder: "Your email address",
      trailing: /*#__PURE__*/React.createElement(Button, {
        size: "compact"
      }, "Sign up"),
      hint: "Clinical notes, a few times a year. No urgency."
    }))), /*#__PURE__*/React.createElement("div", {
      className: "ps-container",
      style: {
        marginTop: 40,
        paddingTop: 24,
        borderTop: "1px solid var(--border-hairline)",
        display: "flex",
        justifyContent: "space-between",
        flexWrap: "wrap",
        gap: 12
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        fontFamily: "var(--font-ui)",
        fontSize: 13,
        color: "var(--text-caption)"
      }
    }, "\xA9 2026 psykolog.no \xB7 Oslo & Ski, Norway"), /*#__PURE__*/React.createElement("span", {
      style: {
        fontFamily: "var(--font-ui)",
        fontSize: 13,
        color: "var(--text-caption)"
      }
    }, "Privacy \xB7 Terms \xB7 Patient rights")));
  }
  function Section({
    ground = "white",
    children,
    style
  }) {
    const grounds = {
      white: "var(--surface-white)",
      calm: "var(--surface-section-calm)",
      warm: "var(--surface-section-warm)",
      dark: "var(--surface-section-dark)"
    };
    return /*#__PURE__*/React.createElement("section", {
      style: {
        background: grounds[ground],
        paddingTop: "var(--section-y)",
        paddingBottom: "var(--section-y)",
        ...style
      }
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-container"
    }, children));
  }
  function SectionHead({
    eyebrow,
    title,
    lead,
    tone = "light",
    align = "left"
  }) {
    return /*#__PURE__*/React.createElement("div", {
      style: {
        maxWidth: 720,
        marginBottom: 48,
        textAlign: align,
        marginInline: align === "center" ? "auto" : undefined
      }
    }, eyebrow && /*#__PURE__*/React.createElement(Eyebrow, {
      tone: tone === "dark" ? "lime" : "brand",
      style: {
        marginBottom: 16
      }
    }, eyebrow), /*#__PURE__*/React.createElement("h2", {
      style: {
        color: tone === "dark" ? "#fff" : "var(--brand-primary)"
      }
    }, title), lead && /*#__PURE__*/React.createElement("p", {
      style: {
        fontSize: "var(--type-body-l-size)",
        lineHeight: "var(--type-body-l-lh)",
        color: tone === "dark" ? "var(--text-on-dark)" : "var(--text-body)",
        marginTop: 20
      }
    }, lead));
  }
  Object.assign(window, {
    Footer,
    Section,
    SectionHead
  });
})();
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/website/Shell.jsx", error: String((e && e.message) || e) }); }

// ui_kits/website/TreatmentsScreen.jsx
try { (() => {
(() => {
  const {
    Card,
    Button,
    Eyebrow,
    Tag,
    Icon,
    TickerBand
  } = window.PsykologNoDesignSystem_a00c2a || {};
  const TREATMENTS = [["ADHD assessment", "Structured diagnostic assessment for adults, including history, rating scales and a written report.", "clipboard-list", "sky"], ["Bipolar disorder", "Diagnostic clarification and medication review with a specialist.", "activity", "white"], ["Depression", "Evidence-based therapy — CBT and metacognitive approaches — with clear review points.", "cloud-rain", "white"], ["Anxiety & panic", "Exposure-based treatment with a plan you can see from session one.", "wind", "cream"], ["Addiction medicine", "Assessment and treatment for alcohol, medication and substance use.", "shield", "white"], ["Trauma", "Trauma-focused therapy at a pace you set.", "heart-handshake", "sky"], ["Sleep", "Insomnia treatment without long-term medication.", "moon", "white"], ["Follow-up", "Ongoing sessions after assessment, video or in clinic.", "repeat", "white"]];
  function TreatmentsScreen({
    onNavigate
  }) {
    return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("section", {
      style: {
        background: "var(--surface-alice)",
        paddingTop: 80,
        paddingBottom: 64
      }
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-container"
    }, /*#__PURE__*/React.createElement(Eyebrow, {
      style: {
        marginBottom: 20
      }
    }, "Treatments"), /*#__PURE__*/React.createElement("h1", {
      style: {
        maxWidth: 780
      }
    }, "Treatments we offer"), /*#__PURE__*/React.createElement("p", {
      style: {
        marginTop: 20,
        fontSize: "var(--type-body-l-size)",
        lineHeight: "var(--type-body-l-lh)",
        maxWidth: "var(--measure-hero)"
      }
    }, "Each route starts with a clinical intake. You will know the plan, the cost and the number of sessions before the second appointment."), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        gap: 12,
        marginTop: 32,
        flexWrap: "wrap"
      }
    }, ["All", "Assessment", "Therapy", "Addiction", "Follow-up"].map((t, i) => /*#__PURE__*/React.createElement(Tag, {
      key: t,
      tone: i === 0 ? "teal" : "neutral",
      pill: true,
      style: {
        fontSize: 15,
        padding: "10px 16px",
        background: i === 0 ? "var(--brand-primary)" : "var(--surface-white)"
      }
    }, t))))), /*#__PURE__*/React.createElement(Section, null, /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-4"
    }, TREATMENTS.map(([t, b, ic, tone]) => /*#__PURE__*/React.createElement(Card, {
      key: t,
      tone: tone,
      interactive: true,
      media: /*#__PURE__*/React.createElement(Icon, {
        name: ic,
        size: 32
      }),
      mediaHeight: 104,
      title: t,
      body: b
    })))), /*#__PURE__*/React.createElement(TickerBand, null), /*#__PURE__*/React.createElement(Section, {
      ground: "warm"
    }, /*#__PURE__*/React.createElement("div", {
      className: "ps-grid-split"
    }, /*#__PURE__*/React.createElement("img", {
      src: "../../assets/imagery/photo-cream-scrim.png",
      alt: "",
      style: {
        width: "100%",
        height: 360,
        objectFit: "cover",
        borderRadius: 8
      }
    }), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement(Eyebrow, {
      style: {
        marginBottom: 16
      }
    }, "How it works"), /*#__PURE__*/React.createElement("h2", null, "Three steps, then a plan"), /*#__PURE__*/React.createElement("div", {
      style: {
        display: "flex",
        flexDirection: "column",
        gap: 24,
        marginTop: 32
      }
    }, [["Book", "Pick a format and a time. No referral needed."], ["Intake", "A 60-minute clinical conversation with a psychologist."], ["Plan", "A written plan with sessions, goals and review points."]].map(([h, b], i) => /*#__PURE__*/React.createElement("div", {
      key: h,
      style: {
        display: "flex",
        gap: 20
      }
    }, /*#__PURE__*/React.createElement("span", {
      style: {
        width: 40,
        height: 40,
        flex: "0 0 auto",
        borderRadius: "var(--radius-pill)",
        background: "var(--brand-primary)",
        color: "#fff",
        fontFamily: "var(--font-ui)",
        fontWeight: 700,
        display: "flex",
        alignItems: "center",
        justifyContent: "center"
      }
    }, i + 1), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
      style: {
        fontFamily: "var(--font-display)",
        fontWeight: 700,
        fontSize: 20,
        color: "var(--brand-primary)"
      }
    }, h), /*#__PURE__*/React.createElement("p", {
      style: {
        marginTop: 6
      }
    }, b))))), /*#__PURE__*/React.createElement(Button, {
      style: {
        marginTop: 40
      },
      onClick: () => onNavigate("Booking")
    }, "Book An Appointment")))));
  }
  Object.assign(window, {
    TreatmentsScreen
  });
})();
})(); } catch (e) { __ds_ns.__errors.push({ path: "ui_kits/website/TreatmentsScreen.jsx", error: String((e && e.message) || e) }); }

__ds_ns.Card = __ds_scope.Card;

__ds_ns.FaqRow = __ds_scope.FaqRow;

__ds_ns.Button = __ds_scope.Button;

__ds_ns.Eyebrow = __ds_scope.Eyebrow;

__ds_ns.Icon = __ds_scope.Icon;

__ds_ns.Tag = __ds_scope.Tag;

__ds_ns.Input = __ds_scope.Input;

__ds_ns.NavBar = __ds_scope.NavBar;

__ds_ns.TickerBand = __ds_scope.TickerBand;

})();
