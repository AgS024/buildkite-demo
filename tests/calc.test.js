const { add, isPositive } = require('../resources/calc');

test('add sums correctly', () => {
  expect(add(2, 3)).toBe(5);
  expect(add(-2, 2)).toBe(0);
});

test('isPositive works', () => {
  expect(isPositive(10)).toBe(true);
  expect(isPositive(0)).toBe(false);
  expect(isPositive(-5)).toBe(false);
});
