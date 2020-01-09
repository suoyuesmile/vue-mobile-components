<template>
  <button
    :type="nativeType"
    class="s-button"
    :class="['s-button--' + type, 's-button--' + size, {
      'is-disabled': disabled,
      'is-plain': plain
    }]"
    @click="handleClick"
    :disabled="disabled">
    <span class="s-button-icon" v-if="icon || $slots.icon">
      <slot name="icon">
      </slot>
    </span>
    <label class="s-button-text"><slot></slot></label>
  </button>
</template>

<script>

export default {
  name: 's-button',
  methods: {
    handleClick(evt) {
      this.$emit('click', evt);
    }
  },
  props: {
    disabled: Boolean,
    nativeType: String,
    plain: Boolean,
    type: {
      type: String,
      default: 'default',
      validator(value) {
        return [
          'default',
          'danger',
          'primary'
        ].indexOf(value) > -1;
      }
    },
    size: {
      type: String,
      default: 'normal',
      validator(value) {
        return [
          'small',
          'normal',
          'large'
        ].indexOf(value) > -1;
      }
    }
  }
};
</script>

<style lang="scss" scoped>
.s-button {
  appearance: none;
  border-radius: 4px;
  border: 0;
  box-sizing: border-box;
  color: inherit;
  display: block;
  font-size: 18px;
  height: 41px;
  outline: 0;
  overflow: hidden;
  position: relative;
  text-align: center;
  &::after {
    background-color: #000;
    content: " ";
    opacity: 0;
    position: absolute 0 0 0 0;
  }
  &:not(.is-disabled):active::after {
    opacity: .4;
  }
  &.icon {
    vertical-align: middle;
    display: inline-block;
  }
}
</style>

