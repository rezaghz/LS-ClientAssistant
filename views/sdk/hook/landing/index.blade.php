@php
    $subClass = 'ls-client-hook-';

    $shapeSvgHeaderBg = '<svg class="'. $subClass .'shape-svg-header-bg" viewBox="0 0 746 875" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_64_79)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2394 314.506L233.886 719.331C252.607 753.679 289.323 774.294 328.395 772.397L573.137 760.509C599.661 759.221 625.642 768.327 645.557 785.894L746 874.488V2.76913C744.919 1.82291 743.818 0.899656 742.698 0H159.878L133.288 96.8739C126.066 123.188 108.601 145.51 84.7982 158.852L52.9283 176.715C4.19931 204.028 -13.4944 265.457 13.2394 314.506Z" fill="var(--primary-5)"/>
        </g>
        <defs>
            <clipPath id="clip0_64_79">
                <rect width="746" height="875" fill="white"/>
            </clipPath>
        </defs>
    </svg>';
    $shapeImage = '<svg class="bg" width="132" height="125" viewBox="0 0 132 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.44112 35.4639C9.17873 12.4846 30.7863 -3.38381 53.5318 0.88096L98.8715 9.38216C117.79 12.9295 131.5 29.4485 131.5 48.6971V78.0555C131.5 98.0708 116.706 115.005 96.8721 117.693L46.2039 124.56C20.2808 128.074 -1.98201 106.167 1.11265 80.1908L6.44112 35.4639Z" fill="url(#paint0_linear_55_219)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_55_219" x1="11.5" y1="113" x2="131.5" y2="-7" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="var(--primary-20)"/>
                                            <stop offset="1" stop-color="var(--primary-85)"/>
                                        </linearGradient>
                                    </defs>
                                </svg>';
    $shapeFooter = '<svg width="1440" height="659" viewBox="0 0 1440 659" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M1440 632.375V659H0V366.667L166.275 356.245C204.297 353.863 239.89 336.745 265.49 308.532L501.699 48.2034C539.41 6.64401 597.567 -9.68902 651.401 6.16318L1285.89 192.996C1362.76 215.633 1407.13 295.896 1385.4 373.034L1371.19 423.484C1360.58 461.164 1365.51 501.524 1384.88 535.544L1440 632.375Z" fill="var(--primary-5)"/>
    </svg>';
    $shapeFooterLine = '<svg class="'. $subClass .'shape-footer-line" width="203" height="385" viewBox="0 0 203 385" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M-1.38632e-05 384.395L98.7316 324.906L98.3481 205.619L200.02 144.595L200.48 88.0706L49.8771 0.639116L51.7178 -1.31974e-05L202.678 87.1759L202.678 145.873L99.8565 206.463L100.214 325.749L2.86325 384.421" fill="url(#paint0_linear_67_241)"/>
<defs>
<linearGradient id="paint0_linear_67_241" x1="101.339" y1="49.4147" x2="101.339" y2="384.414" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--primary)"/>
<stop offset="1" stop-color="var(--primary)" stop-opacity="0"/>
</linearGradient>
</defs>
</svg>';
    $shapePatternA = '<svg width="500" height="506" viewBox="0 0 500 506" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M152.75 146.794L153.517 148.072L105.532 177.395L104.739 176.117L152.75 146.794Z" fill="white"/>
<path d="M350.034 264.648L350.418 264.878L499.257 354.1L499.257 416.836L497.774 416.836L497.774 354.943L350.034 266.387L252.76 326.873L252.76 384.854L203.036 414.279L203.036 474.101L153.108 505.469L152.699 505.214L104.918 475.507L55.1946 505.469L3.75801 474.587L3.75801 414.842L5.24079 414.842L5.24079 473.743L55.1946 503.705L104.918 473.743L105.302 473.999L153.108 503.705L201.554 473.258L201.554 413.41L251.252 384.011L251.252 326.055L350.034 264.648Z" fill="white"/>
<path d="M350.392 88.1481L399.247 116.576L448.434 88.3526L449.175 89.6564L399.247 118.289L350.418 89.8865L251.507 149.708L251.098 149.478L155.435 89.6564L156.227 88.3781L251.507 147.97L350.392 88.1481Z" fill="white"/>
<path d="M57.4188 147.561L57.4188 207.485L105.89 235.913L105.89 298.7L156.585 324.879L155.818 444.318L155.486 444.523L104.918 475.482L54.4532 446.184L52.9449 384.624L104.509 353.87L105.276 355.148L54.4532 385.468L55.936 445.315L104.918 473.743L154.335 443.474L155.077 325.799L104.381 299.621L104.381 236.782L55.936 208.354L55.936 150.143L4.85735 179.415L4.11596 178.111L57.4188 147.561Z" fill="white"/>
<path d="M349.651 32.9279L351.159 32.9279L351.159 149.274L350.776 149.478L203.906 236.015L203.906 355.582L350.801 442.861L350.034 444.165L202.423 356.426L202.423 235.172L202.806 234.942L349.651 148.404L349.651 32.9279Z" fill="white"/>
<path d="M202.423 59.3364L203.906 59.3364L203.906 176.833L252.249 206.692L252.249 267.716L351.159 327.154L351.159 384.624L451.425 442.861L450.683 444.165L349.651 385.493L349.651 328.023L250.766 268.559L250.766 207.536L202.423 177.676L202.423 59.3364Z" fill="white"/>
<path d="M105.532 118.289L153.875 147.024L153.875 147.433L154.207 266.335L252.377 325.825L251.61 327.103L152.725 267.179L152.725 266.77L152.392 147.868L104.765 119.567L105.532 118.289Z" fill="white"/>
<path d="M0.792616 111.923L105.89 176.347L105.89 234.993L153.108 205.695L203.548 234.942L202.806 236.245L153.134 207.434L104.382 237.677L104.382 177.191L0.000110928 113.202L0.792616 111.923Z" fill="white"/>
<path d="M251.252 29.4511L252.76 29.4511L252.76 88.5827L301.333 118.289L300.566 119.567L251.252 89.4263L251.252 29.4511Z" fill="white"/>
<path d="M450.683 325.416L451.425 326.72L399.247 356.119L350.034 328.228L350.776 326.924L399.247 354.406L450.683 325.416Z" fill="white"/>
<path d="M350.034 384.394L350.776 385.698L252.249 443.935L252.249 504.6L250.766 504.6L250.766 443.091L350.034 384.394Z" fill="white"/>
<path d="M155.46 384.189L202.704 413.206L201.911 414.484L155.435 385.928L105.148 414.714L53.3284 385.698L54.0697 384.394L105.123 412.976L155.46 384.189Z" fill="white"/>
<path d="M105.673 474.63L105.885 413.862L104.402 413.857L104.19 474.625L105.673 474.63Z" fill="white"/>
<path d="M201.911 295.709L202.704 296.988L156.227 325.978L155.435 324.7L201.911 295.709Z" fill="white"/>
<path d="M398.506 355.25L399.988 355.25L399.988 412.132L449.201 384.394L449.917 385.698L398.506 414.688L398.506 355.25Z" fill="white"/>
<path d="M300.822 58.4673L301.589 59.7455L252.734 89.4263L252.249 148.405L301.589 177.191L300.822 178.469L250.766 149.274L251.252 88.5827L300.822 58.4673Z" fill="white"/>
<path d="M251.61 88.3782L252.402 89.6564L204.059 119.567L203.267 118.289L251.61 88.3782Z" fill="white"/>
<path d="M300.942 413.846L302.425 413.842L301.928 236.345L300.445 236.349L300.942 413.846Z" fill="white"/>
<path d="M351.159 207.153L350.776 265.517L349.293 265.517L349.651 208.891L301.206 237.217L300.822 236.987L251.124 207.766L251.891 206.462L301.206 235.479L351.159 207.153Z" fill="white"/>
<path d="M451.399 267.562L452.166 268.841L402.417 298.343L401.65 297.064L451.399 267.562Z" fill="white"/>
<path d="M201.733 0.0254461L300.464 59.515L300.081 178.801L401.752 239.824L402.212 296.348L251.61 383.78L252.5 385.001L253.45 384.419L404.411 297.243L404.411 238.546L301.589 177.957L301.947 58.6713L204.596 -9.67862e-05" fill="url(#paint0_linear_225_103)"/>
<defs>
<linearGradient id="paint0_linear_225_103" x1="303.072" y1="335" x2="303.072" y2="2.20103e-05" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--primary)"/>
<stop offset="1" stop-color="var(--primary)" stop-opacity="0"/>
</linearGradient>
</defs>
</svg>';
    $shapePatternB = '<svg width="584" height="748" viewBox="0 0 584 748" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.3471 214.638L78.4685 216.507L8.30565 259.382L7.14687 257.513L77.3471 214.638Z" fill="var(--primary-3)"/>
<path d="M365.811 386.961L366.372 387.297L584 517.755L584 609.486L581.832 609.486L581.832 518.988L365.811 389.503L223.579 477.945L223.579 562.723L150.874 605.748L150.874 693.218L77.8707 739.083L77.2726 738.71L7.4088 695.274L-65.2959 739.083L-140.505 693.928L-140.505 606.57L-138.337 606.57L-138.337 692.694L-65.2959 736.504L7.4088 692.694L7.9695 693.068L77.8707 736.504L148.706 691.984L148.706 604.477L221.374 561.49L221.374 476.748L365.811 386.961Z" fill="var(--primary-3)"/>
<path d="M148.968 0.0373709L293.331 87.0214L292.77 261.438L441.431 350.665L442.104 433.313L221.897 561.153L220.364 562.088L293.331 606.458L293.331 693.778L219.579 737.812L237.036 747.756L241.447 747.756L223.915 737.775L294.975 695.348L295.499 695.049L295.499 605.225L224.588 562.088L445.319 434.621L445.319 348.796L294.975 260.204L295.499 85.7878L153.155 4.23756e-07" fill="var(--primary-3)"/>
<path d="M366.334 128.887L437.768 170.454L509.688 129.186L510.772 131.093L437.768 172.959L366.372 131.429L221.747 218.899L221.149 218.563L81.2722 131.093L82.4309 129.224L221.747 216.357L366.334 128.887Z" fill="var(--primary-3)"/>
<path d="M-62.0439 215.759L-62.0439 303.378L8.82919 344.945L8.82919 436.751L82.9544 475.029L81.8329 649.67L81.347 649.969L7.40871 695.236L-66.38 652.398L-68.5854 562.387L6.81064 517.418L7.93205 519.287L-66.38 563.62L-64.212 651.127L7.40871 692.694L79.6649 648.436L80.7489 476.375L6.62374 438.097L6.62374 346.216L-64.2119 304.649L-64.2119 219.534L-138.898 262.335L-139.982 260.429L-62.0439 215.759Z" fill="var(--primary-3)"/>
<path d="M149.977 86.7596L152.145 86.7596L152.145 258.56L222.831 302.22L222.831 391.446L367.456 478.356L367.456 562.387L514.061 647.539L512.977 649.445L365.25 563.658L365.25 479.627L220.663 392.68L220.663 303.453L149.977 259.793L149.977 86.7596Z" fill="var(--primary-3)"/>
<path d="M8.30584 172.959L78.992 214.974L78.992 215.572L79.4779 389.428L223.018 476.412L221.897 478.281L77.3099 390.662L77.3099 390.063L76.824 216.208L7.18443 174.828L8.30584 172.959Z" fill="var(--primary-3)"/>
<path d="M-144.841 163.651L8.82931 257.849L8.82931 343.6L77.8707 300.762L151.622 343.525L150.538 345.431L77.9081 303.304L6.62386 347.525L6.62386 259.083L-146 165.52L-144.841 163.651Z" fill="var(--primary-3)"/>
<path d="M221.374 43.0621L223.579 43.0621L223.579 129.523L294.602 172.959L293.48 174.828L221.374 130.756L221.374 43.0621Z" fill="var(--primary-3)"/>
<path d="M512.977 475.814L514.061 477.72L437.768 520.708L365.811 479.926L366.895 478.019L437.768 518.203L512.977 475.814Z" fill="var(--primary-3)"/>
<path d="M365.811 562.05L366.895 563.957L222.831 649.109L222.831 737.812L220.663 737.812L220.663 647.875L365.811 562.05Z" fill="var(--primary-3)"/>
<path d="M81.3094 561.751L150.388 604.178L149.229 606.047L81.272 564.293L7.74495 606.383L-68.0249 563.957L-66.9409 562.05L7.70758 603.841L81.3094 561.751Z" fill="var(--primary-3)"/>
<path d="M8.51152 693.991L8.82251 605.138L6.65445 605.13L6.34346 693.983L8.51152 693.991Z" fill="var(--primary-3)"/>
<path d="M149.229 432.378L150.388 434.247L82.4308 476.636L81.272 474.767L149.229 432.378Z" fill="var(--primary-3)"/>
<path d="M436.684 519.437L438.852 519.437L438.852 602.608L510.809 562.05L511.856 563.957L436.684 606.346L436.684 519.437Z" fill="var(--primary-3)"/>
<path d="M293.854 85.4887L294.975 87.3577L223.542 130.756L222.831 216.993L294.975 259.083L293.854 260.952L220.663 218.264L221.374 129.523L293.854 85.4887Z" fill="var(--primary-3)"/>
<path d="M221.897 129.224L223.056 131.093L152.37 174.828L151.211 172.959L221.897 129.224Z" fill="var(--primary-3)"/>
<path d="M294.029 605.114L296.197 605.108L295.471 345.577L293.303 345.583L294.029 605.114Z" fill="var(--primary-3)"/>
<path d="M367.456 302.893L366.895 388.232L364.727 388.232L365.25 305.434L294.415 346.852L293.854 346.515L221.187 303.79L222.308 301.883L294.415 344.31L367.456 302.893Z" fill="var(--primary-3)"/>
<path d="M514.024 391.222L515.145 393.091L442.403 436.228L441.282 434.359L514.024 391.222Z" fill="var(--primary-3)"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M366.932 647.539L365.811 649.445L365.811 649.445L366.932 647.539L366.932 647.539ZM223.829 562.514L152.145 519.923L152.145 345.095L366.895 218.563L367.456 218.264L367.456 48.1458L365.25 48.1458L365.25 216.993L150.538 343.525L149.977 343.861L149.977 521.156L221.73 563.805L223.829 562.514Z" fill="url(#paint0_linear_193_24)"/>
<defs>
<linearGradient id="paint0_linear_193_24" x1="258.716" y1="649.445" x2="258.717" y2="48.1458" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--primary)" stop-opacity="0"/>
<stop offset="1" stop-color="var(--primary)"/>
</linearGradient>
</defs>
</svg>';
    $shapeArrow = '<svg class="'. $subClass .'shape-svg-arrow" width="217" height="217" viewBox="0 0 217 217" fill="none" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_55_230)">
    <mask id="mask0_55_230" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="217" height="217">
      <path d="M195.375 216.543L216.543 21.1673L21.1673 8.20337e-06L-3.23883e-05 195.375L195.375 216.543Z" fill="white"/>
    </mask>
    <g mask="url(#mask0_55_230)">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M123.527 82.4499C126.602 78.0248 127.963 72.6709 126.838 66.3737C123.358 46.8938 109.4 37.6541 91.9845 34.7239C66.5547 30.4458 33.6731 39.8277 16.7807 49.5683C15.9801 50.0287 15.7081 51.0509 16.169 51.8473C16.6294 52.6479 17.6514 52.9237 18.452 52.4633C34.8468 43.0092 66.7522 33.8684 91.4324 38.0186C107.423 40.7094 120.353 49.0703 123.546 66.9629C124.5 72.2874 123.337 76.8012 120.747 80.5498C118.271 78.8945 115.781 77.3312 113.28 75.8642C106.378 71.8169 86.7583 64.7588 71.7462 64.9731C60.9775 65.1292 52.5867 69.0175 51.7406 79.4106C51.2717 85.1873 54.4088 89.7424 59.8423 92.91C67.3098 97.2695 79.2902 98.9654 91.0776 97.7445C100.892 96.7301 110.554 93.7052 117.365 88.6664C118.859 87.5556 120.224 86.3548 121.425 85.0554C155.326 108.663 185.056 148.915 195.195 188.041C195.43 188.932 196.338 189.471 197.234 189.237C198.127 189.008 198.663 188.094 198.434 187.204C188.126 147.441 157.97 106.527 123.527 82.4499ZM118.617 83.1439C116.286 81.5936 113.943 80.1262 111.59 78.7479C104.973 74.8708 86.1789 68.1097 71.7954 68.3162C62.9684 68.4408 55.7642 71.1641 55.0704 79.6821C54.7088 84.1551 57.3206 87.5683 61.5247 90.0263C66.1523 92.7245 72.6482 94.2682 79.7077 94.6811C90.4255 95.3076 102.44 93.314 111.309 88.54C114.12 87.0296 116.609 85.2334 118.617 83.1439Z" fill="var(--secondary)"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M144.034 152.449C163.207 157.911 182.625 172.934 195.538 188.257C196.131 188.962 197.187 189.051 197.892 188.457C198.596 187.863 198.689 186.809 198.095 186.104C184.78 170.3 164.716 154.868 144.951 149.236C144.066 148.984 143.141 149.498 142.888 150.387C142.635 151.272 143.149 152.197 144.034 152.449Z" fill="var(--secondary)"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M198.469 185.928C191.838 170.713 193.088 148.611 198.969 133.038C199.297 132.174 198.863 131.206 197.998 130.884C197.135 130.557 196.172 130.992 195.845 131.855C189.683 148.17 188.46 171.322 195.407 187.263C195.773 188.109 196.762 188.496 197.607 188.129C198.453 187.759 198.84 186.774 198.469 185.928Z" fill="var(--secondary)"/>
    </g>
  </g>
  <defs>
    <clipPath id="clip0_55_230">
      <rect width="196.519" height="196.519" fill="white" transform="translate(0 195.375) rotate(-83.8166)"/>
    </clipPath>
  </defs>
</svg>';
    $shapeFooterPattern = '<svg class="'. $subClass .'shape-footer-pattern" width="512" height="524" viewBox="0 0 512 524" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M156.441 150.34L157.226 151.649L108.082 181.681L107.27 180.372L156.441 150.34Z" fill="var(--primary-5)"/>
<path d="M358.492 271.042L358.885 271.278L511.319 362.655L511.319 426.907L509.801 426.907L509.801 363.519L358.492 272.822L258.867 334.77L258.867 394.152L207.942 424.289L207.942 485.556L156.807 517.682L156.389 517.42L107.453 486.996L56.5283 517.682L3.84894 486.053L3.84894 424.864L5.36754 424.864L5.36754 485.189L56.5283 515.875L107.453 485.189L107.846 485.451L156.807 515.875L206.423 484.692L206.423 423.398L257.322 393.288L257.322 333.932L358.492 271.042Z" fill="var(--primary-5)"/>
<path d="M206.607 0.0261603L307.724 60.953L307.331 183.121L411.459 245.619L411.93 303.508L257.689 393.053L256.615 393.707L307.724 424.786L307.724 485.948L256.066 516.792L268.293 523.756L271.382 523.756L259.103 516.765L308.876 487.048L309.242 486.839L309.242 423.922L259.574 393.707L414.182 304.425L414.182 244.31L308.876 182.257L309.242 60.089L209.539 -1.56017e-05" fill="var(--primary-5)"/>
<path d="M358.858 90.2775L408.893 119.392L459.268 90.4869L460.028 91.8222L408.893 121.147L358.884 92.0579L257.584 153.325L257.165 153.089L159.19 91.8222L160.002 90.5131L257.584 151.545L358.858 90.2775Z" fill="var(--primary-5)"/>
<path d="M58.8062 151.126L58.8062 212.498L108.448 241.613L108.448 305.917L160.368 332.728L159.583 455.053L159.243 455.262L107.453 486.969L55.7691 456.964L54.2243 393.917L107.035 362.419L107.82 363.728L55.7691 394.781L57.2876 456.074L107.453 485.189L158.064 454.189L158.824 333.671L106.904 306.86L106.904 242.503L57.2876 213.388L57.2876 153.77L4.97489 183.749L4.21559 182.414L58.8062 151.126Z" fill="var(--primary-5)"/>
<path d="M207.314 60.7696L208.832 60.7696L208.832 181.105L258.343 211.686L258.343 274.184L359.644 335.058L359.644 393.917L462.332 453.561L461.572 454.896L358.099 394.807L358.099 335.948L256.825 275.048L256.825 212.55L207.314 181.969L207.314 60.7696Z" fill="var(--primary-5)"/>
<path d="M108.082 121.147L157.593 150.576L157.593 150.995L157.933 272.77L258.474 333.697L257.689 335.006L156.415 273.634L156.415 273.215L156.074 151.44L107.296 122.456L108.082 121.147Z" fill="var(--primary-5)"/>
<path d="M0.811766 114.627L108.448 180.607L108.448 240.67L156.807 210.665L208.466 240.618L207.706 241.953L156.834 212.445L106.904 243.419L106.904 181.471L0.000112653 115.936L0.811766 114.627Z" fill="var(--primary-5)"/>
<path d="M257.322 30.1623L258.867 30.1623L258.867 90.7225L308.614 121.147L307.828 122.456L257.322 91.5865L257.322 30.1623Z" fill="var(--primary-5)"/>
<path d="M461.572 333.278L462.332 334.613L408.893 364.723L358.492 336.158L359.251 334.823L408.893 362.969L461.572 333.278Z" fill="var(--primary-5)"/>
<path d="M358.492 393.681L359.251 395.016L258.343 454.66L258.343 516.791L256.825 516.791L256.825 453.796L358.492 393.681Z" fill="var(--primary-5)"/>
<path d="M159.216 393.472L207.602 423.189L206.79 424.498L159.19 395.252L107.689 424.734L54.6169 395.016L55.3762 393.681L107.663 422.953L159.216 393.472Z" fill="var(--primary-5)"/>
<path d="M108.226 486.097L108.444 423.861L106.925 423.856L106.707 486.092L108.226 486.097Z" fill="var(--primary-5)"/>
<path d="M206.79 302.854L207.602 304.163L160.002 333.854L159.19 332.545L206.79 302.854Z" fill="var(--primary-5)"/>
<path d="M408.134 363.833L409.652 363.833L409.652 422.089L460.054 393.681L460.787 395.016L408.134 424.707L408.134 363.833Z" fill="var(--primary-5)"/>
<path d="M308.09 59.8795L308.876 61.1886L258.841 91.5866L258.343 151.99L308.876 181.471L308.09 182.78L256.825 152.88L257.322 90.7225L308.09 59.8795Z" fill="var(--primary-5)"/>
<path d="M257.689 90.5131L258.5 91.8223L208.989 122.456L208.178 121.147L257.689 90.5131Z" fill="var(--primary-5)"/>
<path d="M308.213 423.845L309.732 423.84L309.223 242.055L307.704 242.059L308.213 423.845Z" fill="var(--primary-5)"/>
<path d="M359.644 212.157L359.251 271.932L357.733 271.932L358.099 213.938L308.483 242.948L308.09 242.712L257.192 212.786L257.977 211.45L308.483 241.168L359.644 212.157Z" fill="var(--primary-5)"/>
<path d="M462.306 274.027L463.091 275.336L412.14 305.55L411.354 304.241L462.306 274.027Z" fill="var(--primary-5)"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M359.644 33.7231L358.099 33.7231L358.099 151.99L207.706 240.618L207.314 240.853L207.314 365.037L257.572 394.91L259.042 394.006L208.832 364.173L208.832 241.717L359.251 153.089L359.644 152.88L359.644 33.7231ZM358.492 454.896L358.492 454.896L359.277 453.561L359.277 453.561L358.492 454.896Z" fill="var(--primary-5)"/>
</svg>';
    $iconArrowLeft = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.60854 4.55806C9.85262 4.80213 9.85262 5.19786 9.60854 5.44194L5.67551 9.375H15.8333C16.1785 9.375 16.4583 9.65483 16.4583 10C16.4583 10.3452 16.1785 10.625 15.8333 10.625H5.67551L9.60854 14.5581C9.85262 14.8022 9.85262 15.1978 9.60854 15.4419C9.36446 15.686 8.96879 15.686 8.72471 15.4419L3.72468 10.4419C3.48061 10.1978 3.48061 9.80216 3.72468 9.55808L8.72471 4.55806C8.96879 4.31398 9.36446 4.31398 9.60854 4.55806Z" fill="var(--primary)"/>
</svg>';
    $iconArrowBottomCircle = '<svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12ZM12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM12.75 7.99997C12.75 7.58576 12.4142 7.24997 12 7.24997C11.5858 7.24997 11.25 7.58576 11.25 7.99997V14.1893L9.53034 12.4696C9.23745 12.1767 8.76257 12.1767 8.46968 12.4696C8.17679 12.7625 8.17679 13.2374 8.46968 13.5303L11.4697 16.5303C11.7626 16.8232 12.2374 16.8232 12.5303 16.5303L15.5303 13.5303C15.8232 13.2374 15.8232 12.7625 15.5303 12.4696C15.2374 12.1767 14.7626 12.1767 14.4697 12.4696L12.75 14.1893V7.99997Z" fill="var(--primary)"/>
</svg>';
    $iconDownload = '<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.1531 34.3877C25.8571 34.7115 25.4387 34.8958 25 34.8958C24.5612 34.8958 24.1429 34.7115 23.8468 34.3877L15.5135 25.2731C14.9312 24.6362 14.9754 23.6479 15.6123 23.0656C16.2492 22.4833 17.2375 22.5275 17.8198 23.1644L23.4375 29.3088V6.25C23.4375 5.38706 24.1371 4.6875 25 4.6875C25.8629 4.6875 26.5625 5.38706 26.5625 6.25V29.3088L32.1802 23.1644C32.7625 22.5275 33.7508 22.4833 34.3877 23.0656C35.0246 23.6479 35.0687 24.6362 34.4864 25.2731L26.1531 34.3877Z" fill="var(--primary)"/>
<path d="M7.8125 31.25C7.8125 30.3871 7.11296 29.6875 6.25 29.6875C5.38706 29.6875 4.6875 30.3871 4.6875 31.25V31.3644C4.68746 34.2135 4.68742 36.51 4.93025 38.3162C5.18238 40.1915 5.72173 41.7702 6.97573 43.0242C8.22973 44.2783 9.80863 44.8177 11.6839 45.0698C13.49 45.3125 15.7865 45.3125 18.6357 45.3125H31.3644C34.2135 45.3125 36.51 45.3125 38.3162 45.0698C40.1915 44.8177 41.7702 44.2783 43.0244 43.0242C44.2783 41.7702 44.8177 40.1915 45.0698 38.3162C45.3125 36.51 45.3125 34.2135 45.3125 31.3644V31.25C45.3125 30.3871 44.6129 29.6875 43.75 29.6875C42.8871 29.6875 42.1875 30.3871 42.1875 31.25C42.1875 34.2404 42.1842 36.326 41.9727 37.8998C41.7671 39.4285 41.3912 40.2379 40.8146 40.8146C40.2379 41.3912 39.4285 41.7671 37.8998 41.9727C36.326 42.1842 34.2404 42.1875 31.25 42.1875H18.75C15.7596 42.1875 13.6739 42.1842 12.1003 41.9727C10.5716 41.7671 9.76202 41.3912 9.18544 40.8146C8.60885 40.2379 8.23292 39.4285 8.0274 37.8998C7.81581 36.326 7.8125 34.2404 7.8125 31.25Z" fill="var(--primary)"/>
</svg>';
@endphp
@php
    require './views/sdk/hook/landing/_partials/svg.php';
@endphp
@extends('sdk.hook.landing._partials.base')
@section('title', $hook['title_fa'])
@section('content')
    @include('sdk.hook.landing._partials.header')
    @include('sdk.hook.landing._partials.description')
    @include('sdk.hook.landing._partials.form')
    @include('sdk.hook.landing._partials.sticky-tabs')
@endsection