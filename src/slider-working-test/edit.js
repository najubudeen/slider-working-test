import { __ } from "@wordpress/i18n";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
	const { imageOne, imageTwo } = attributes;

	return (
		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody title="My Images">
					<TextControl
						__nextHasNoMarginBottom
						__next40pxDefaultSize
						label="First Image Url"
						value={imageOne}
						onChange={(value) => setAttributes({imageOne:value})}
					/>
					<TextControl
						__nextHasNoMarginBottom
						__next40pxDefaultSize
						label="Second Image Url"
						value={imageTwo}
						onChange={(value) => setAttributes({imageTwo:value})}
					/>
				</PanelBody>
			</InspectorControls>
			My Edit
		</div>
	);
}
