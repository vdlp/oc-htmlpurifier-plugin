<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Vdlp.HtmlPurifier plugin configuration
    |--------------------------------------------------------------------------
    |
    | For detailed information about each configuration parameter go to:
    | http://htmlpurifier.org/live/configdoc/plain.html
    |
    */

    'Attr.AllowedClasses' => null,
    'Attr.AllowedFrameTargets' => [],
    'Attr.AllowedRel' => [],
    'Attr.AllowedRev' => [],
    'Attr.ClassUseCDATA' => null,
    'Attr.DefaultImageAlt' => null,
    'Attr.DefaultInvalidImage' => '',
    'Attr.DefaultInvalidImageAlt' => 'Invalid image',
    'Attr.DefaultTextDir' => 'ltr',
    'Attr.EnableID' => false,
    'Attr.ForbiddenClasses' => [],
    'Attr.ID.HTML5' => null,
    'Attr.IDBlacklist' => [],
    'Attr.IDBlacklistRegexp' => null,
    'Attr.IDPrefix' => '',
    'Attr.IDPrefixLocal' => '',
    'AutoFormat.AutoParagraph' => false,
    'AutoFormat.Custom' => [],
    'AutoFormat.DisplayLinkURI' => false,
    'AutoFormat.Linkify' => false,
    'AutoFormat.PurifierLinkify.DocURL' => '#%s',
    'AutoFormat.PurifierLinkify' => false,
    'AutoFormat.RemoveEmpty.Predicate' => [
        'colgroup' => [],
        'th' => [],
        'td' => [],
        'iframe' => [
            0 => 'src',
        ],
    ],
    'AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions' => [
        'td' => true,
        'th' => true,
    ],
    'AutoFormat.RemoveEmpty.RemoveNbsp' => false,
    'AutoFormat.RemoveEmpty' => false,
    'AutoFormat.RemoveSpansWithoutAttributes' => false,
    'CSS.AllowDuplicates' => false,
    'CSS.AllowImportant' => false,
    'CSS.AllowTricky' => false,
    'CSS.AllowedFonts' => null,
    'CSS.AllowedProperties' => null,
    'CSS.DefinitionRev' => 1,
    'CSS.ForbiddenProperties' => [],
    'CSS.MaxImgLength' => '1200px',
    'CSS.Proprietary' => false,
    'CSS.Trusted' => false,
    'Cache.DefinitionImpl' => 'Serializer',
    'Cache.SerializerPath' => temp_path(),
    'Cache.SerializerPermissions' => 493,
    'Core.AggressivelyFixLt' => true,
    'Core.AggressivelyRemoveScript' => true,
    'Core.AllowParseManyTags' => false,
    'Core.AllowHostnameUnderscore' => false,
    'Core.CollectErrors' => false,
    'Core.ColorKeywords' => [
        'aliceblue' => '#F0F8FF',
        'antiquewhite' => '#FAEBD7',
        'aqua' => '#00FFFF',
        'aquamarine' => '#7FFFD4',
        'azure' => '#F0FFFF',
        'beige' => '#F5F5DC',
        'bisque' => '#FFE4C4',
        'black' => '#000000',
        'blanchedalmond' => '#FFEBCD',
        'blue' => '#0000FF',
        'blueviolet' => '#8A2BE2',
        'brown' => '#A52A2A',
        'burlywood' => '#DEB887',
        'cadetblue' => '#5F9EA0',
        'chartreuse' => '#7FFF00',
        'chocolate' => '#D2691E',
        'coral' => '#FF7F50',
        'cornflowerblue' => '#6495ED',
        'cornsilk' => '#FFF8DC',
        'crimson' => '#DC143C',
        'cyan' => '#00FFFF',
        'darkblue' => '#00008B',
        'darkcyan' => '#008B8B',
        'darkgoldenrod' => '#B8860B',
        'darkgray' => '#A9A9A9',
        'darkgrey' => '#A9A9A9',
        'darkgreen' => '#006400',
        'darkkhaki' => '#BDB76B',
        'darkmagenta' => '#8B008B',
        'darkolivegreen' => '#556B2F',
        'darkorange' => '#FF8C00',
        'darkorchid' => '#9932CC',
        'darkred' => '#8B0000',
        'darksalmon' => '#E9967A',
        'darkseagreen' => '#8FBC8F',
        'darkslateblue' => '#483D8B',
        'darkslategray' => '#2F4F4F',
        'darkslategrey' => '#2F4F4F',
        'darkturquoise' => '#00CED1',
        'darkviolet' => '#9400D3',
        'deeppink' => '#FF1493',
        'deepskyblue' => '#00BFFF',
        'dimgray' => '#696969',
        'dimgrey' => '#696969',
        'dodgerblue' => '#1E90FF',
        'firebrick' => '#B22222',
        'floralwhite' => '#FFFAF0',
        'forestgreen' => '#228B22',
        'fuchsia' => '#FF00FF',
        'gainsboro' => '#DCDCDC',
        'ghostwhite' => '#F8F8FF',
        'gold' => '#FFD700',
        'goldenrod' => '#DAA520',
        'gray' => '#808080',
        'grey' => '#808080',
        'green' => '#008000',
        'greenyellow' => '#ADFF2F',
        'honeydew' => '#F0FFF0',
        'hotpink' => '#FF69B4',
        'indianred' => '#CD5C5C',
        'indigo' => '#4B0082',
        'ivory' => '#FFFFF0',
        'khaki' => '#F0E68C',
        'lavender' => '#E6E6FA',
        'lavenderblush' => '#FFF0F5',
        'lawngreen' => '#7CFC00',
        'lemonchiffon' => '#FFFACD',
        'lightblue' => '#ADD8E6',
        'lightcoral' => '#F08080',
        'lightcyan' => '#E0FFFF',
        'lightgoldenrodyellow' => '#FAFAD2',
        'lightgray' => '#D3D3D3',
        'lightgrey' => '#D3D3D3',
        'lightgreen' => '#90EE90',
        'lightpink' => '#FFB6C1',
        'lightsalmon' => '#FFA07A',
        'lightseagreen' => '#20B2AA',
        'lightskyblue' => '#87CEFA',
        'lightslategray' => '#778899',
        'lightslategrey' => '#778899',
        'lightsteelblue' => '#B0C4DE',
        'lightyellow' => '#FFFFE0',
        'lime' => '#00FF00',
        'limegreen' => '#32CD32',
        'linen' => '#FAF0E6',
        'magenta' => '#FF00FF',
        'maroon' => '#800000',
        'mediumaquamarine' => '#66CDAA',
        'mediumblue' => '#0000CD',
        'mediumorchid' => '#BA55D3',
        'mediumpurple' => '#9370DB',
        'mediumseagreen' => '#3CB371',
        'mediumslateblue' => '#7B68EE',
        'mediumspringgreen' => '#00FA9A',
        'mediumturquoise' => '#48D1CC',
        'mediumvioletred' => '#C71585',
        'midnightblue' => '#191970',
        'mintcream' => '#F5FFFA',
        'mistyrose' => '#FFE4E1',
        'moccasin' => '#FFE4B5',
        'navajowhite' => '#FFDEAD',
        'navy' => '#000080',
        'oldlace' => '#FDF5E6',
        'olive' => '#808000',
        'olivedrab' => '#6B8E23',
        'orange' => '#FFA500',
        'orangered' => '#FF4500',
        'orchid' => '#DA70D6',
        'palegoldenrod' => '#EEE8AA',
        'palegreen' => '#98FB98',
        'paleturquoise' => '#AFEEEE',
        'palevioletred' => '#DB7093',
        'papayawhip' => '#FFEFD5',
        'peachpuff' => '#FFDAB9',
        'peru' => '#CD853F',
        'pink' => '#FFC0CB',
        'plum' => '#DDA0DD',
        'powderblue' => '#B0E0E6',
        'purple' => '#800080',
        'rebeccapurple' => '#663399',
        'red' => '#FF0000',
        'rosybrown' => '#BC8F8F',
        'royalblue' => '#4169E1',
        'saddlebrown' => '#8B4513',
        'salmon' => '#FA8072',
        'sandybrown' => '#F4A460',
        'seagreen' => '#2E8B57',
        'seashell' => '#FFF5EE',
        'sienna' => '#A0522D',
        'silver' => '#C0C0C0',
        'skyblue' => '#87CEEB',
        'slateblue' => '#6A5ACD',
        'slategray' => '#708090',
        'slategrey' => '#708090',
        'snow' => '#FFFAFA',
        'springgreen' => '#00FF7F',
        'steelblue' => '#4682B4',
        'tan' => '#D2B48C',
        'teal' => '#008080',
        'thistle' => '#D8BFD8',
        'tomato' => '#FF6347',
        'turquoise' => '#40E0D0',
        'violet' => '#EE82EE',
        'wheat' => '#F5DEB3',
        'white' => '#FFFFFF',
        'whitesmoke' => '#F5F5F5',
        'yellow' => '#FFFF00',
        'yellowgreen' => '#9ACD32'
    ],
    'Core.ConvertDocumentToFragment' => true,
    'Core.DirectLexLineNumberSyncInterval' => 0,
    'Core.DisableExcludes' => false,
    'Core.EnableIDNA' => false,
    'Core.Encoding' => 'utf-8',
    'Core.EscapeInvalidChildren' => false,
    'Core.EscapeInvalidTags' => false,
    'Core.EscapeNonASCIICharacters' => false,
    'Core.HiddenElements' => [
        'script' => true,
        'style' => true,
    ],
    'Core.Language' => 'en',
    'Core.LegacyEntityDecoder' => false,
    'Core.LexerImpl' => null,
    'Core.MaintainLineNumbers' => null,
    'Core.NormalizeNewlines' => true,
    'Core.RemoveInvalidImg' => true,
    'Core.RemoveProcessingInstructions' => false,
    'Core.RemoveScriptContents' => null,
    'Filter.Custom' => [],
    'Filter.ExtractStyleBlocks.Escaping' => true,
    'Filter.ExtractStyleBlocks.Scope' => null,
    'Filter.ExtractStyleBlocks.TidyImpl' => null,
    'Filter.ExtractStyleBlocks' => false,
    'Filter.YouTube' => false,
    'HTML.Allowed' => null,
    'HTML.AllowedAttributes' => null,
    'HTML.AllowedComments' => [],
    'HTML.AllowedCommentsRegexp' => null,
    'HTML.AllowedElements' => null,
    'HTML.AllowedModules' => null,
    'HTML.Attr.Name.UseCDATA' => false,
    'HTML.BlockWrapper' => 'p',
    'HTML.CoreModules' => [
        'Structure' => true,
        'Text' => true,
        'Hypertext' => true,
        'List' => true,
        'NonXMLCommonAttributes' => true,
        'XMLCommonAttributes' => true,
        'CommonAttributes' => true,
    ],
    'HTML.CustomDoctype' => null,
    'HTML.DefinitionID' => null,
    'HTML.DefinitionRev' => 1,
    'HTML.Doctype' => null,
    'HTML.FlashAllowFullScreen' => false,
    'HTML.ForbiddenAttributes' => [],
    'HTML.ForbiddenElements' => [],
    'HTML.Forms' => false,
    'HTML.MaxImgLength' => 1200,
    'HTML.Nofollow' => false,
    'HTML.Parent' => 'div',
    'HTML.Proprietary' => false,
    'HTML.SafeEmbed' => false,
    'HTML.SafeIframe' => false,
    'HTML.SafeObject' => false,
    'HTML.SafeScripting' => [],
    'HTML.Strict' => false,
    'HTML.TargetBlank' => false,
    'HTML.TargetNoopener' => true,
    'HTML.TargetNoreferrer' => true,
    'HTML.TidyAdd' => [],
    'HTML.TidyLevel' => 'medium',
    'HTML.TidyRemove' => [],
    'HTML.Trusted' => false,
    'HTML.XHTML' => true,
    'Output.CommentScriptContents' => true,
    'Output.FixInnerHTML' => true,
    'Output.FlashCompat' => false,
    'Output.Newline' => null,
    'Output.SortAttr' => false,
    'Output.TidyFormat' => false,
    'Test.ForceNoIconv' => false,
    'URI.AllowedSchemes' => [
        'http' => true,
        'https' => true,
        'mailto' => true,
        'ftp' => true,
        'nntp' => true,
        'news' => true,
        'tel' => true,
    ],
    'URI.Base' => null,
    'URI.DefaultScheme' => 'http',
    'URI.DefinitionID' => null,
    'URI.DefinitionRev' => 1,
    'URI.Disable' => false,
    'URI.DisableExternal' => false,
    'URI.DisableExternalResources' => false,
    'URI.DisableResources' => false,
    'URI.Host' => null,
    'URI.HostBlacklist' => [],
    'URI.MakeAbsolute' => false,
    'URI.Munge' => null,
    'URI.MungeResources' => false,
    'URI.MungeSecretKey' => null,
    'URI.OverrideAllowedSchemes' => true,
    'URI.SafeIframeRegexp' => null,
];
